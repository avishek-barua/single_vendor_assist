<?php

namespace App\Http\Controllers;

use App\Account;
use App\Invoice;
use App\Order;
use App\Product;
use App\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $orders = DB::table('orders')
                    ->leftJoin('customers', 'orders.customer_id', '=', 'customers.id')
                    ->select('orders.*', 'customers.name as cname', 'customers.mobile as mobile', 'customers.address as address')
                    ->where('orders.is_deleted', '=', 0)
                    ->where('order_status',0)
                    ->orderBy('id', 'DESC')
                    ->latest()
                    ->get();
        return view('order.index', ['orders' => $orders]);
    }

    public function acceptPayment(){
        $orders = DB::table('orders')
                    ->leftJoin('customers', 'orders.customer_id', '=', 'customers.id')
                    ->select('orders.*', 'customers.name as cname', 'customers.mobile as mobile', 'customers.address as address')
                    ->where('orders.is_deleted', '=', 0)
                    ->where('order_status',1)
                    ->orderBy('id', 'DESC')
                    ->latest()
                    ->get();
        return view('order.index', ['orders' => $orders]);
    }

    public function processAcceptPayment($id){
        $order = Order::find($id);
        $order->order_status = 1;
        $order->save();
        return redirect('admin/orders')->with('order_delete_message','payment accepted successfully');
    }

    public function cancelOrder($id){
        $order = Order::findOrFail($id);
        $order->order_status = 4;
        $order->save();

        $orderProducts = DB::table("order_products")
                            ->where("order_id", "=", $id)
                            ->get();

        foreach($orderProducts as $orderProduct){
                $product = Product::findOrFail($orderProduct->product_id);
                $product->stock = $product->stock + $orderProduct->quantity;
                $product->save();
        }
        return redirect('admin/orders')->with('order_delete_message','Order cancelled successfully');
    }

    public function paidOrders(){
        $orders = DB::table('orders')
                    ->leftJoin('customers', 'orders.customer_id', '=', 'customers.id')
                    ->select('orders.*', 'customers.name as cname', 'customers.mobile as mobile', 'customers.address as address')
                    ->where('orders.is_deleted', '=', 0)
                    ->where('is_paid',1)
                    ->orderBy('id', 'DESC')
                    ->latest()
                    ->get();
        return view('order.index', ['orders' => $orders]);
    }

    public function unpaidOrders(){
        $orders = DB::table('orders')
                    ->leftJoin('customers', 'orders.customer_id', '=', 'customers.id')
                    ->select('orders.*', 'customers.name as cname', 'customers.mobile as mobile', 'customers.address as address')
                    ->where('orders.is_deleted', '=', 0)
                    ->where('is_paid',0)
                    ->orderBy('id', 'DESC')
                    ->latest()
                    ->get();
        return view('order.index', ['orders' => $orders]);
    }

    public function allCancelOrders(){
        $orders = DB::table('orders')
                    ->leftJoin('customers', 'orders.customer_id', '=', 'customers.id')
                    ->select('orders.*', 'customers.name as cname', 'customers.mobile as mobile', 'customers.address as address')
                    ->where('orders.order_status', '=', 4)
                    ->orderBy('id', 'DESC')
                    ->latest()
                    ->get();
        return view('order.index', ['orders' => $orders]);
    }

    public function processDelivery($id){
        $order = Order::find($id);
        $order->order_status = 2;
        $order->save();
        return redirect('admin/accept/payments')->with('order_delete_message','Send to delivery');
    }

    public function allProcessDelivery(){
        $orders = DB::table('orders')
                    ->leftJoin('customers', 'orders.customer_id', '=', 'customers.id')
                    ->select('orders.*', 'customers.name as cname', 'customers.mobile as mobile', 'customers.address as address')
                    ->where('orders.order_status', '=', 2)
                    ->orderBy('id', 'DESC')
                    ->latest()
                    ->get();
        return view('order.index', ['orders' => $orders]);
    }

    public function deliveryDone($id){
        $order = Order::find($id);
        $order->order_status = 3;
        $order->save();
        return redirect('admin/all/process/delivery')->with('order_delete_message','Delivered to Customer');
    }

    public function allDelivery(){
        $orders = DB::table('orders')
                    ->leftJoin('customers', 'orders.customer_id', '=', 'customers.id')
                    ->select('orders.*', 'customers.name as cname', 'customers.mobile as mobile', 'customers.address as address')
                    ->where('orders.order_status', 3)
                    ->orderBy('id', 'DESC')
                    ->latest()
                    ->get();
        return view('order.index', ['orders' => $orders]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $order = DB::table('orders')
                    ->leftJoin('customers', 'orders.customer_id', '=', 'customers.id')
                    ->select('orders.*', 'customers.id as cid', 'customers.name as cname', 'customers.mobile as mobile', 'customers.address as address', 'customers.delivery_address as delivery_address')
                    ->where('orders.id', '=', $id)
                    ->where('orders.is_deleted', '=', 0)
                    ->first();

        $settings = Setting::findOrFail(1);
        $invoice = Invoice::where('order_id', $order->id)->first();
        $products = DB::table('order_products')
                            ->leftJoin('products', 'order_products.product_id', '=', 'products.id')
                            ->where('order_products.order_id', $id)
                            ->select('order_products.*', 'products.*')
                            ->get();

        return view('order.show', [
            'order' => $order,
            'settings' => $settings,
            'invoice' => $invoice,
            'products' => $products,
        ]);
    }

    public function dueOrderPay(Request $request,$id){
        $orderID = $id;
        $paid_amount = $request->paid;

        $order = Order::findOrFail($orderID);

        if (($request->paid + $order->amount_paid + $order->discount_amount) == $order->order_value) {
            $order->is_paid = true;
            $order->amount_paid = $order->amount_paid + $paid_amount;

        } else {
            $order->is_paid = false;
            $order->amount_paid = $order->amount_paid + $paid_amount;

        }


        // $account = DB::table('accounts')->where('order_id',$orderID)->first();
        $account = Account::where('order_id',$orderID)->first();
        if ($account) {
            // dd($account) ;
            $account->amount = $account->amount + $request->paid ;
            // dd($account->amount);
            if (($account->amount + $order->discount_amount) == $order->order_value) {
                $account->category = 'Final Payment';
            }

            if ($request->ref_2) {
                $account->reference     = $account->reference.','.$request->ref_2;
            }

            if ($request->payment_method) {
                $account->account_type  = $account->account_type.','. $request->payment_method;
            }

            if ($request->transaction_code_2) {
                $account->transaction_code = $account->transaction_code.','.$request->transaction_code_2;
            }else{
                $account->transaction_code = $account->transaction_code.','.'Cash';
            }

            $account->save();
        }


        $order->save();
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function delete($id) {
        $order = Order::findOrFail($id);
        $order->is_deleted = 1;
        if ($order->save()) {
            Session::flash('order_delete_message', 'Order Cancelled Successfully!');
        } else {
            Session::flash('order_delete_message', 'Order Cancellation Failed!');
            Session::flash('alert-class', 'alert-danger');
        }

        $orderProducts = DB::table("order_products")
                            ->where("order_id", "=", $id)
                            ->get();

        foreach($orderProducts as $orderProduct){
                $product = Product::findOrFail($orderProduct->product_id);
                $product->stock = $product->stock + $orderProduct->quantity;
                $product->save();
                // dd($orderProduct->quantity);

        }


        $account = Account::where('order_id',$id)->delete();

        // update acc, invoice
        // dd($product);
        $orders = Order::where('is_deleted', 0)->latest()->get();
        // return redirect()->route('order.index', ['order' => $orders]);
        return view('order.index', ['orders' => $orders]);
    }

    public function return($id) {
        $order = Order::findOrFail($id);
        $order->is_return = true;
        $order->return_date = date(now());
        $order->save();

        $orderProducts = DB::table("order_products")
                            ->where("order_id", "=", $id)
                            ->get();

        foreach($orderProducts as $orderProduct){
                $product = Product::findOrFail($orderProduct->product_id);
                $product->stock = $product->stock + $orderProduct->quantity;
                $product->save();
        }

        if ($product->save()) {
            Session::flash('product_return_message', 'Product return Successfully!');
        } else {
            Session::flash('product_return_message', 'Product return Failed!');
            Session::flash('alert-class', 'alert-danger');
        }
        return redirect()->route('orders.show', $order->id);

    }

    public function getOrderStatus($id){
        $track = Order::where('status_code',$id)->first();
        return response()->json([
            'success' => 'success',
            'track' => $track,
        ]);
    }

}

<?php

namespace App\Http\Controllers;

use App\Account;
use App\Customer;
use App\Order;
use App\OrderProduct;
use App\Product;
use Illuminate\Http\Request;
// use DB;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{

    public function index() {
        $total_products = Product::where('is_deleted',0)->count();
        $total_customers = Customer::all()->count();
        $total_orders = Order::all()->count();
        $total_transactions = Account::all()->count();

        // $bill_pending_due = Order::where('is_paid', 0)->where('is_deleted',0)->count();
        $bill_pending_due = Order::where('is_paid', 0)->where('is_deleted',0)->get();
        $bill_pending_order_value = $bill_pending_due->sum("order_value");
        $bill_pending_discount = $bill_pending_due->sum("discount_amount");
        $bill_pending_due_amount = $bill_pending_order_value - $bill_pending_discount;


        // $bill_pending_paid = Order::where('is_paid', 1)->where('is_deleted',0)->count();
        $bill_pending_paid = Order::where('is_paid', 1)->where('is_deleted',0)->get();
        $bill_pending_paid_amount = $bill_pending_paid->sum('amount_paid');


        $devices_on_rent = DB::table('orders')->where('is_paid', 0)->sum('total_quantity');
        // $products = Product::where('is_deleted', 0)->where('stock','<',51)->with('category')->latest()->get();
        $products = Product::join('suppliers','products.supplier_id','suppliers.id')
                                ->select('products.*','suppliers.name as supplier')
                                ->where('products.is_deleted', 0)
                                ->where('products.stock','<',51)
                                ->with('category')
                                ->latest()
                                ->get();

        $order_product = OrderProduct::join('products','order_products.product_id','products.id')
                                        ->join('orders','order_products.order_id','orders.id')
                                            ->select('order_products.*','orders.customer_id as order','products.title as product')
                                            ->get();

        $totalTransaction = Account::sum("amount");

        // $order_customer = Order::join('customers','orders.customer_id','customers.id')


        return view('dashboard', [
            'total_products' => $total_products,
            'total_customers' => $total_customers,
            'total_orders' => $total_orders,
            'total_transactions' => $total_transactions,
            'bill_pending_due_amount' => $bill_pending_due_amount,
            'bill_pending_paid_amount' => $bill_pending_paid_amount,
            'devices_on_rent' => $devices_on_rent,
            'products' => $products,
            'order_product' => $order_product,
            'totalTransaction' => $totalTransaction
        ]);

    }
}

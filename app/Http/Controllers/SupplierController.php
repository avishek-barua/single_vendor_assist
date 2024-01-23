<?php

namespace App\Http\Controllers;

use App\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers = Supplier::all();
        return view('supplier.index',['suppliers'=>$suppliers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('supplier.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $supplier = new Supplier();
        $supplier->name = $request->name;
        $supplier->phone = $request->phone;
        $supplier->organization_name = $request->organization_name;
        $supplier->organization_address = $request->organization_address;
        $supplier->trade_license = $request->trade_license;

        if ($supplier->save()) {
            Session::flash('supplier_add_message', 'Supplier Added Successfully!');
        } else {
            Session::flash('supplier_add_message', 'Supplier Adding Failed!');
            Session::flash('alert-class', 'alert-danger');
        }
        return redirect()->to('admin/suppliers');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $supplier = Supplier::find($id);
        return view('supplier.edit',['supplier'=>$supplier]);
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
        $supplier = Supplier::find($id);
        $supplier->name = $request->name;
        $supplier->phone = $request->phone;
        $supplier->organization_name = $request->organization_name;
        $supplier->organization_address = $request->organization_address;
        $supplier->trade_license = $request->trade_license;

        if ($supplier->save()) {
            Session::flash('supplier_add_message', 'Supplier Updated Successfully!');
        } else {
            Session::flash('supplier_add_message', 'Supplier Updated Failed!');
            Session::flash('alert-class', 'alert-danger');
        }
        return redirect()->to('admin/suppliers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }

    public function delete($id){
        $supplier = Supplier::find($id);
        if ($supplier->delete()) {
            Session::flash('supplier_delete_message', 'Supplier Deleted Successfully!');
        } else {
            Session::flash('supplier_delete_message', 'Supplier Deleted Failed!');
            Session::flash('alert-class', 'alert-danger');
        }
        return redirect()->to('admin/suppliers');
    }
}

<?php

namespace App\Http\Controllers;

use App\Setting;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function edit() {
        $settings = Setting::findOrFail(1);
        return view('settings.edit', ['settings' => $settings]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request) {

        if ($request->hasFile('customFile')) {
            $image           = $request->file('customFile');
            $name            = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/logo');
            $file_path       = 'uploads/logo/'.$name;
            $image->move($destinationPath, $name);
        }


        $settings = Setting::findOrFail(1);
        $settings->company_name = $request->company_name;
        $settings->company_address = $request->company_address;
        $settings->company_city = $request->company_city;
        $settings->phone = $request->phone;
        $settings->email = $request->email;
        $settings->invoice_prefix = $request->invoice_prefix;
        $settings->tos = $request->tos;

        if (isset($file_path)) {
            $settings->image_path  = $file_path;
        } else {
            $settings->image_path  = 'public/uploads/logo/default_logo.png';
        }


        if ($settings->save()) {
            Session::flash('settings_update_message', 'Settings Update Successfully!');
        } else {
            Session::flash('settings_update_message', 'Settings Updating Failed!');
            Session::flash('alert-class', 'alert-danger');
        }
        // return back();
        return view('settings.edit', ['settings' => $settings]);
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

    // Terms and conditions
    public function tos()
    {
        $settings = Setting::findOrFail(1);
        return view('order.tos', ['settings'=> $settings]);
    }

    public function manageUser(){
        return view('settings.manage_user');
    }

    public function storeUser(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->is_admin = $request->is_admin;

        // dd($request->is_admin);

        if ( $user->save()) {
            Session::flash('user_add_message', 'User Added Successfully!');
        } else {
            Session::flash('user_add_message', 'User Adding Failed!');
            Session::flash('alert-class', 'alert-danger');
        }
        return back();
    }

    public function manageAllUser(){
        $users = User::all();
        return view('settings.all_user',['users' => $users]);
    }

    public function editUser($id){
        $user = User::find($id);
        return view('settings.edit_user',['user'=>$user]);
    }

    public function updateUser(Request $request , $id){
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->is_admin = $request->is_admin;

        if ( $user->save()) {
            Session::flash('user_add_message', 'User Updated Successfully!');
        } else {
            Session::flash('user_add_message', 'User Updating Failed!');
            Session::flash('alert-class', 'alert-danger');
        }
        return redirect('admin/manage/all/user');
    }

    public function deleteUser($id){
        $user = User::find($id);

        if ( $user->delete()) {
            Session::flash('user_delete_message', 'User Deleted Successfully!');
        } else {
            Session::flash('user_delete_message', 'User Deleting Failed!');
            Session::flash('alert-class', 'alert-danger');
        }

        return back();
    }
}

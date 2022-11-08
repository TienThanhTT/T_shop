<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Htpp\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class Admincontroller extends Controller
{
    public function show_dashboard(){
        return view('admin.admin_home');
    }

    public function dashboard(Request $request){
        $admin_email = $request->admin_email;
        $admin_password= md5($request->admin_password);
        $result = DB::table('tbl_admin')->where('admin_email', $admin_email)->where('admin_password', $admin_password)->first();
        if($result){
            session::put('admin_name', $result->admin_name);
            session::put('admin_id', $result->admin_id);
            return redirect('/dashboard');
        }else{
            Session::put('message','sai roi ong gia');
            return redirect('/login');
        }
    }

    public function logout(){
            session::put('admin_name', NULL);
            session::put('admin_id', NULL);
        return redirect('/login');
    }
}

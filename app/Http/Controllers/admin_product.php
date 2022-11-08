<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Htpp\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class admin_product extends Controller
{
    public function add_product(){
        return view('admin.add_product');
    }

    public function all_product(){
        $all_product = DB::table('sanpham')->get();
        $manager_product = view('admin.all_product')->with('all_product',$all_product);

        return view('pages.layoutadmin')->with('admin.all_product',$manager_product);
    }

    public function save_product(Request $request){
        $data=array();
        $data['name_sanpham'] = $request->product_name;
        $data['price'] = $request->price;
        $data['price_sale'] = $request->price_sale;
        $data['soluong'] = $request->so_luong;
        $data['tmp'] = $request->product_pic;

        DB::table('sanpham')->insert($data);
        session::put('message','Thêm sản phẩm thành công');

        return redirect('/add-product');

    }

    public function edit_product($product_id){
        $edit_product = DB::table('sanpham')->where('id', $product_id)->get();
        $manager_product = view('admin.edit_product')->with('edit_product',$edit_product);

        return view('pages.layoutadmin')->with('admin.edit_product',$manager_product);
    }

    public function delete_product($product_id ){
        DB::table('sanpham')->where('id', $product_id)->delete();
        session::put('message','Xóa sản phẩm thành công');
        return redirect('/all-product');
    }

    public function update_product($product_id,Request $request){
        $data=array();
        $data['name_sanpham'] = $request->product_name;
        $data['price'] = $request->price;
        $data['price_sale'] = $request->price_sale;
        $data['soluong'] = $request->so_luong;
        $data['tmp'] = $request->product_pic;

        DB::table('sanpham')->where('id', $product_id)->update($data);
        session::put('message','Cập nhật sản phẩm thành công');
        return redirect('/all-product');
    }
}

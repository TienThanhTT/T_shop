<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Homecontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',  'App\Http\Controllers\Homecontroller@index');


Route::get('/login','App\Http\Controllers\Logincontroller@index');
Route::get('/dashboard','App\Http\Controllers\Admincontroller@show_dashboard');
Route::get('/logout','App\Http\Controllers\Admincontroller@logout');

Route::post('/admin-dashboard','App\Http\Controllers\Admincontroller@dashboard');

// Admin_product

Route::get('/add-product','App\Http\Controllers\admin_product@add_product');
Route::get('/all-product','App\Http\Controllers\admin_product@all_product');
Route::get('/edit-product/{product_id}','App\Http\Controllers\admin_product@edit_product');
Route::get('/delete-product/{product_id}','App\Http\Controllers\admin_product@delete_product');

Route::post('/save-product','App\Http\Controllers\admin_product@save_product');
Route::post('/update-product/{product_id}','App\Http\Controllers\admin_product@update_product');

// Category

Route::get('/cat','App\Http\Controllers\cat_controller@show_cat');

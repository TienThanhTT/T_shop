<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cat_controller extends Controller
{
    public function show_cat(){
        return view('inc.giohang');
    }
}

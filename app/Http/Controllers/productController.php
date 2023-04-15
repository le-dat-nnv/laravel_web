<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller
{
    //
    public function get_form() {
        return view('product.add' , ['controller' => $this]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class productController extends Controller
{
    //
    public function get_form() {
        $data = DB::table('module_config')->get();
        // dd($list);
       return view('product.list', compact('data') , [
        'controller' => $this
    ]);
    }
}

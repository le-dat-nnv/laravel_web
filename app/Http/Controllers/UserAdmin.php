<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAdmin extends Controller
{
    //
    public function get_form() {
        return view('layout_admin.login' , [
            'controller' => $this 
        ]);
    }
    public function check_form() {
        echo '123';
    }
}

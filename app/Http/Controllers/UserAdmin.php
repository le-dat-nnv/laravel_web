<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserAdmin extends Controller {

    //
  public function get_form() {
    $users = DB::table('users')->get();
       // dd($users);
    return view('layout_admin.login', [
      'controller' => $this
    ]);
  }


  public function check_dn(Request $request)
  {
    $user_admin = DB::table('user_admin')
    ->where('name', $request->user)
    ->where('password', $request->password)
    ->first();
    if ($user_admin) {
  //Đăng nhập thành công
      return redirect()->intended('/');
    } else {
  //Đăng nhập thất bại
      $errors = ['login_failed' => 'Tên đăng nhập hoặc mật khẩu không chính xác.'];
      return redirect('login_admin_project_laravel')->withErrors($errors);
    }

  }
  public function check_form(Request $request) {
    $userss = User::where('user' , '=' , $request->user)->first();
    if ($userss && strtolower($request->password) === strtolower($userss->password)) {
      return redirect()->intended('/');
    }
    else {
      $errors = ['login_failed' => 'Tên đăng nhập hoặc mật khẩu không chính xác.'];
      return redirect('login_admin_project_laravel')->withErrors($errors);
    }
  }

}

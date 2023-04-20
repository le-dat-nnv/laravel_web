<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\productController;
use App\Http\Controllers\UserAdmin;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('config_add', [homeController::class , 'fetch_data_module']);
Route::post('/save-module', [homeController::class , 'add_module']);

// tạo bộ lọc 

Route::get('/', [productController::class , 'get_form']);


// login in admin
Route::get('login_admin_project_laravel', [UserAdmin::class , 'get_form']);
Route::post('submit-form', [UserAdmin::class , 'check_form']);




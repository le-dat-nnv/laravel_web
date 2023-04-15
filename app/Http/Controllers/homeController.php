<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class homeController extends Controller
{
    //
    public function __construct() {
        
    }
    public function fetch_data_module() {
        $module_config = DB::table('module_config')->get();
        dd($module_config);
        return view('home',[
            'module_config' => $module_config,
            'controller' => $this,
        ]);
    }
    
    public function add_modules(Request $request) {
        var_dump($this->datas);
        $data = $this->add_data($request);
        DB::table('module_config')->insert($data);
    }
    
    public function add_module(Request $request)
    {
        $fields = ['name_module', 'name_short', 'summary'];
        $data = Controller::getDataFromForm($request, $fields);
        DB::table('module_config')->insert($data);
        // xử lý dữ liệu và lưu vào cơ sở dữ liệu...
        
//        return redirect('/users')->with('success', 'User created successfully.');
    }
}

<?php
namespace Modules\Products\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Modules\ModuleNameInterface;
class Products extends Controller implements ModuleNameInterface{

    public $moduleName;

    public function __construct()
    {
        return $this->moduleName = 'Products';
    }

    public function index()
    {
        $data = DB::table('module_config')->get();
        echo "ledat đang code laravel ";
        return view('Products::index');
    }

    public function getModuleName() {
        
    } 
}
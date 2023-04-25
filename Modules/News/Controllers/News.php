<?php
namespace Modules\News\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Modules\ModuleNameInterface;
class News extends Controller implements ModuleNameInterface{

    public $moduleName;

    public function __construct()
    {
        return $this->moduleName = 'News';
    }

    public function index()
    {
        $data = DB::table('module_config')->get();
        echo "ledat đang code laravel ";
        return view('News::index');
    }

    public function getModuleName() {
        
    } 
}
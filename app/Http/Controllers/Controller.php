<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController {
    
    use AuthorizesRequests,
        ValidatesRequests;
    public $datas=[];
    public function form($data) {
        echo $html = '<div class="row">
                            <div class="mb-3 col-4" style="display: flex;gap: 1rem;">
                                <div class="col-3">
                                   <label for="text" class="col-form-label">' . $data . '</label>
                                 </div>
                                <div class="col-6">
                                    <input type="text" id="text" class="form-control" aria-labelledby="passwordHelpInline" name="'.$data.'">
                                </div>
                            </div>
                        </div>';
    }
    
    public function add_data(Request $request) {
        
//        foreach ($this->data as $rows) {
            var_dump($this->datas);
            $data = array();
            $data['name_module'] = $request->name_module;
            $data['name_short'] = $request->name_short;
            $data['summary'] = $request->summary;
            return $data;
//        }
        
    }
    
    public static function getDataFromForm(Request $request, $fields) {
        $data = [];
        foreach ($fields as $field) {
            $data[$field] = $request->input($field);
        }
        return $data;
    }

}

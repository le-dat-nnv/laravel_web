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
    public function delete_form($id)
    {
        echo "123";
        die();
        $product = Product::find($id);

        if ($product) {
        // Xóa sản phẩm nếu tìm thấy
            $product->delete();

        // Trả về thông báo thành công
            return response()->json(['message' => 'Xóa sản phẩm thành công']);
        } else {
        // Trả về thông báo lỗi nếu không tìm thấy sản phẩm
            return response()->json(['error' => 'Không tìm thấy sản phẩm'], 404);
        }
    }
    public function test () {
        while(!dead) { 
            $this->code(); 
        } 
    }

    public function code() {
        echo 'continue coding';
    }
}

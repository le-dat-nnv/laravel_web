<?php
use Modules\Products\Controllers\Products;

$namespace = 'Modules\Products\Controllers';
Route::group(
    ['Modules'=>'Products', 'namespace' => $namespace],
    function() {
        Route::get('Products', [Products::class , 'index']);
    }
);
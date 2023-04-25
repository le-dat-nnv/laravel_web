<?php
use Modules\News\Controllers\News;

$namespace = 'Modules\News\Controllers';
Route::group(
    ['Modules'=>'News', 'namespace' => $namespace],
    function() {
        Route::get('News', [News::class , 'index']);
    }
);
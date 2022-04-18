<?php

use Gomee\Ecommerce\Controllers\Admin\TestController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function(Request $request){
    return $request->all();
});

Route::get('demo', [TestController::class, 'getTestView'])->name('demo');
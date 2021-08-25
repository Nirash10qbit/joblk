<?php

use Illuminate\Http\Request;
use Modules\Core\Http\Controllers\CustomerController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/core', function (Request $request) {
    return $request->user();
});

// Route::apiResource(['customers'=> \Modules\Core\Http\Controllers\CustomerController::class]);

Route::get('customers',[CustomerController::class,'index']);

Route::get('customers/{id}',[CustomerController::class,'show']);

Route::post('customers',[CustomerController::class],'store');

Route::put('customers/{id}',[CustomerController::class],'update');

Route::delete('customers/{id}',[CustomerController::class],'delete');



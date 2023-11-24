<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('/customer', CustomerController::class);

Route::post('customer/add',[CustomerController::class,'savecustomer']);

Route::put('customer/update/{id}',[CustomerController::class,'updatecustomer']);

Route::get('customer/get',[CustomerController::class,'getcustomers']);

Route::delete('customer/delete/{id}',[CustomerController::class,'deletecustomer']);
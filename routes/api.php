<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AddressController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('/customer', CustomerController::class);
Route::apiResource('/address', AddressController::class);

Route::post('customer/add',[CustomerController::class,'savecustomer']);

Route::put('customer/update/{id}',[CustomerController::class,'updatecustomer']);

Route::get('customer/get',[CustomerController::class,'getcustomers']);

Route::delete('customer/delete/{id}',[CustomerController::class,'deletecustomer']);

Route::post('address/add',[AddressController::class,'saveaddress']);

Route::put('address/update/{id}',[AddressController::class,'updateaddress']);

Route::get('address/get',[AddressController::class,'showaddresses']);

Route::delete('address/delete/{id}',[AddressController::class,'deleteaddress']);

Route::post('customer/insert',[CustomerController::class,'saveAddress']);
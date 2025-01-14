<?php

use App\Http\Controllers\TodoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::get('/show',[TodoController::class,'index']);
Route::post('/store',[TodoController::class,'store']);
Route::put('/update/{id}',[TodoController::class,'update']);
Route::delete('/destroy/{id}',[TodoController::class,'destroy']);


<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register',[UserController::class, 'register']);
Route::post('/login',[UserController::class, 'login']);
Route::post('/addproduct',[ProductController::class, 'addProduct']);
Route::get('/list',[ProductController::class, 'list']);
Route::delete('/delete/{id}',[ProductController::class, 'delete']);
Route::get('/product/{id}',[ProductController::class, 'getProduct']);
Route::put('/update/{id}',[ProductController::class, 'updateProduct']);
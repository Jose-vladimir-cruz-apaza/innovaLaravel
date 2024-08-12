<?php

use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\Product\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::get('/categories',[CategoryController::class,"index"]);   
Route::get('/categories/{term}',[CategoryController::class,'show']);
Route::post('/categories',[CategoryController::class,'store']);
Route::delete('/categories/{id}',[CategoryController::class,'destroy']);
Route::patch('/categories/{id}',[CategoryController::class,'update']);
 

Route::get('/products',[ProductController::class,"index"]);   
Route::get('/products/{term}',[ProductController::class,'show']);
Route::post('/products',[ProductController::class,'store']);
Route::delete('/products/{id}',[ProductController::class,'destroy']);
Route::patch('/products/{id}',[ProductController::class,'update']);
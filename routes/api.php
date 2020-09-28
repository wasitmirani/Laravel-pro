<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\Category\SubCategoryController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['prefix' => 'categories',], function() {
Route::get('/show',[CategoryController::class,'show']);
Route::post("/store",[CategoryController::class,'store']);
Route::post("/update",[CategoryController::class,'update']);
Route::get("/delete/{id}",[CategoryController::class,'delete']);
Route::get('/filter',[CategoryController::class,'filter']);

});


Route::group(['prefix' => 'subcategories',], function() {
    Route::get('/get/categories',[SubCategoryController::class,'getcategories']);
Route::get('/show',[SubCategoryController::class,'show']);
Route::post("/store",[SubCategoryController::class,'store']);
Route::post("/update",[SubCategoryController::class,'update']);
Route::get("/delete/{id}",[SubCategoryController::class,'delete']);
Route::get('/filter',[SubCategoryController::class,'filter']);

});

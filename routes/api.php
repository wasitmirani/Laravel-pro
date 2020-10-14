<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Panel\User\RoleController;
use App\Http\Controllers\Panel\User\UserController;
use App\Http\Controllers\Api\User\UserAuthController;
use App\Http\Controllers\Panel\Category\CategoryController;
use App\Http\Controllers\Panel\Category\SubCategoryController;

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


//Mobile Side Api
Route::post('/user/login',[UserAuthController::class,'login']);
;

Route::middleware(["auth:sanctum"])->group(function () {
  Route::get("/users", [UserAuthController::class,'index']);
});

//

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


Route::group(['prefix' => 'user',], function() {

Route::get('/all',[UserController::class,'all']);
Route::post("/store",[UserController::class,'store']);
Route::post("/update",[UserController::class,'update']);
Route::get("/delete/{id}",[UserController::class,'delete']);
Route::get('/filter',[UserController::class,'filter']);

});


Route::group(['prefix' => 'role',], function() {

Route::get('/all',[RoleController::class,'all']);
Route::post("/store",[RoleController::class,'store']);
Route::post("/update",[RoleController::class,'update']);
Route::get("/delete/{id}",[RoleController::class,'delete']);
Route::get('/filter',[RoleController::class,'filter']);

});
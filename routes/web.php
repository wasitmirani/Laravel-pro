<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\DashboardController;




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/',[SiteController::class,'index']);

Route::group([
    'prefix' => 'dashboard',
    // 'where' => ['lang' => '(fr|de|en)'],
    // 'middleware' => 'auth'
], function() {

    // Route::get('', ['as' => 'index', 'uses' => 'HomeController@getIndex']);
    Route::get('/',[DashboardController::class,'index']);
    // ...

});

<?php

use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [WebController::class, 'home']);
Route::get('/about', [WebController::class, 'about']);

// Routing Exercise using Route
Route::group(['prefix' => '/hehe'], function(){
    Route::get('/route1/{params}', function($params){
        return $params;
    }) -> name('hehe.route1');
    Route::get('/route2/{params}', function($params){
        return $params;
    }) -> name('hehe.route2');
});

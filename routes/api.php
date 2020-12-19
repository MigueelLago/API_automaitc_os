<?php

use Illuminate\Http\Request;

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


// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('auth/login', 'Api\AuthController@login');

Route::namespace('API')->name('api.')->middleware('cors', 'apiJWT')->group(function(){
    Route::prefix('services')->group(function(){
        Route::post('auth/logout', 'AuthController@logout');
        Route::get('/', 'ServiceController@index')->name('index_services');
        Route::get('/{id}', 'ServiceController@show')->name('single_services');
        Route::post('/', 'ServiceController@store')->name('store_services');
        Route::put('/{id}', 'ServiceController@update')->name('update_services');
        Route::delete('/{id}', 'ServiceController@delete')->name('delete_services');
    });
});

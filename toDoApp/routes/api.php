<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

Route::group(['middleware' => ['api']], function ($router) {
    Route::group([],function ($router) {
        Route::post('login', 'AuthController@login');
        Route::post('logout', 'AuthController@logout');
        Route::post('refresh', 'AuthController@refresh');
        Route::post('me', 'AuthController@me');
        Route::post('register', 'MyRegisterController@store');
    });

    Route::group(['middleware' => ['auth']], function ($router) {
        Route::get('/cards', 'CardsController@index');
        Route::get('/cards/{card}', 'CardsController@getCard');
        Route::post('/cards', 'CardsController@store');
        Route::put('/cards/{card}', 'CardsController@update');
        Route::delete('/cards/{card}', 'CardsController@destroy');
    });
});





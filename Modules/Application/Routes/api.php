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

//Route::middleware('auth:api')->get('/application', function (Request $request) {
//    return $request->user();
//});

Route::group(['prefix' => 'application'], function()
{
    Route::get('/', 'ApplicationController@index');
    Route::group(['middleware' => 'jwt.auth'], function () {
        Route::get('/configuracion/template-de-permisos-de-usuarios', 'ConfiguracionController@getTemplatePermisosUsuarios');
        //Route::resource('configuracion', 'ConfiguracionController');
        Route::resource('storage-generico', 'StorageGenericoController');
    });
});

Route::group(['middleware' => 'api', 'prefix' => 'api/application', 'namespace' => 'App\Http\Controllers'], function()
{
    Route::group(['middleware' => 'jwt.auth'], function () {
        Route::get( '/exist', 'AppController@alreadyExist');
        Route::get( '/generic-search', 'AppController@genericSearch');
        Route::get( '/simple-search', 'AppController@simpleSearch');
        Route::post( '/quick-update', 'AppController@quickUpdate');
    });
});
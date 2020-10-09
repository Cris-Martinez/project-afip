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

Route::group(['middleware' => ['api']], function () {
    Route::get('/', function() {
      //return Response::json(['error' => 'disabled_user'], 401);
    });
   // Route::post('/authenticate', 'JwtController@authenticate');
    // Route::group(['middleware' => 'jwt.auth'], function () {
    //     Route::get( '/app/exist/{model}/{column}/{value}', 'AppController@alreadyExist');
    //     Route::get( '/app/generic-search', 'AppController@genericSearch');
    //     Route::get('/configuracion/template-de-permisos-de-usuarios', 'ConfiguracionController@getTemplatePermisosUsuarios');
    //     Route::resource('configuracion', 'ConfiguracionController');
    // });
});





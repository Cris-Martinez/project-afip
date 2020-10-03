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

/*Route::middleware('auth:api')->get('/authentication', function (Request $request) {
    return $request->user();
});*/

Route::prefix('authentication')->group(function () {
    Route::get('/', 'AuthenticationController@index');
    Route::post('/authenticate', 'AuthenticationController@authenticate');
    Route::post('user-confirmation', 'UsuariosController@userConfirmation');
    Route::get('get-user-to-confirm/{confirmation_hash}', 'UsuariosController@getUserDataByConfirmationHash');
    Route::post('user-forgotpassword', 'UsuariosController@userForgotPassword');

    Route::group(['middleware' => 'jwt.auth'], function () {
        Route::get('get-user-permissions/{user_id?}', 'UsuariosController@getUserPermissions');
        Route::post('update-user-permissions/{user_id}', 'UsuariosController@updateUserPermissions');
        Route::resource('users', 'UsuariosController');
    });
});
<?php

namespace Modules\Authentication\Http\Controllers;

use Illuminate\Http\Request;
use Tymon\JWTAuth\Exceptions\JWTException;
use App\Http\Controllers\Controller;
use Modules\Application\Entities\Configuracion as Configuracion;

use JWTAuth;
use Response;
use Auth;

class AuthenticationController extends Controller
{
  /**
   * Display a listing of the resource.
   * @return Response
   */
  public function index()
  {
    return Response::json('Bienvenido al Modulo de Authenticacion.', 200);
  }

  public function authenticate(Request $request)
  {
    try {
      $credentials = $request->only('email', 'password');
      if (Auth::attempt($credentials)) {
        if (Auth::user()->habilitado == 1) {
          if (Auth::user()->email_confirmed == 1) {
            $customClaims = [
              'id' => Auth::user()->id,
              'nombre' => Auth::user()->nombre,
              'email' => Auth::user()->email
            ];
          } else {
            return Response::json(['error' => 'Este usuario todavia no confirmo su email: ' . $credentials["email"]], 401);
          }
        } else {
          return Response::json(['error' => 'Usuario Deshabilitado'], 401);
        }
      } else {
        return Response::json(['error' => 'Credenciales Invalidas'], 401);
      }
    } catch (JWTException $e) {
      return Response::json(['error' => 'No encontro usuario...'], 500);
    }
    try {
      $token = JWTAuth::fromUser(Auth::user(), $customClaims);
    } catch (JWTException $e) {
      return Response::json(['error' => 'could_not_create_token'], 500);
    }
    try {
      $loginReturnObject = new \stdClass();
      $loginReturnObject->token = $token;
      $loginReturnObject->permisos = Auth::user()->permisos;
      $loginReturnObject->configuracion = Configuracion::all();
      return Response::json(compact('loginReturnObject'), 200);
    } catch (JWTException $e) {
      return Response::json(['error' => 'Configurando Return Object....'], 500);
    }
  }
}
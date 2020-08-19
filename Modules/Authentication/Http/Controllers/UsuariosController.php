<?php

namespace Modules\Authentication\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\AppController as AppController;
use Modules\Authentication\Entities\Usuario as Usuario;
use Modules\Authentication\Emails\ForgotPasswordEmail as ForgotPasswordEmail;
use Carbon\Carbon;

use JWTAuth;
use Response;
use Config;
use stdClass;
use Hash;


class UsuariosController extends AppController
{
  protected $moduleEntityPath = 'Modules\\Authentication\\Entities';
  protected $className = 'Usuario';

  public function getUserPermissions(Request $request, $userId = null)
  {
    $permissionsTemplateDefinition =  json_decode(
      Config::get('authentication.Permissions.PermissionsTemplateDefinition'),
      true
    );
    if ($userId == null) {
      //return permissions of logged in user. [session user]
      $userPermissions = JWTAuth::toUser($request->input('token'))->getPermisosAsJson();
    } else {
      $userPermissions = Usuario::find($userId)->getPermisosAsJson();
    }
    $computedUserPermissions = array_replace_recursive($permissionsTemplateDefinition, $userPermissions);
    return Response::json(compact('computedUserPermissions'), 200);
  }

  public function updateUserPermissions(Request $request, $userId)
  {
    $user = Usuario::find($userId);
    $user->permisos[0]->permisos = json_encode($request->post('permisos'));
    $user->push();
    return Response::json(compact('user'), 200);
  }

  public function userConfirmation(Request $request)
  {
    $params = $request->only('confirmation_hash', 'password');
    $usuario = Usuario::where('confirmation_hash', $params['confirmation_hash'])->first();
    $respuesta = new stdClass();
    if ($usuario) {
      if (!$usuario->email_confirmed) {
        $usuario->email_confirmed = true;
        $usuario->email_confirmed_at = Carbon::now();
        $usuario->password = Hash::make($params['password']);
        $usuario->save();
        $respuesta->message = 'Usuario habilitado correctamente';
      } else {
        $respuesta = $this->generateResponseError('usuario_ya_confirmado', 'El usuario ya fue confirmado.');
      }
    } else {
      $respuesta = $this->generateResponseError('usuario_inexistente', 'El usuario que se desea confirmar no existe.');
    }
    return Response::json($respuesta, 200);
  }

  public function getUserDataByConfirmationHash($confirmation_hash)
  {
    $usuario = Usuario::where('confirmation_hash', $confirmation_hash)->first();
    $respuesta = new stdClass();
    if ($usuario) {
      if (!$usuario->email_confirmed) {
        $respuesta->email = $usuario->email;
        $respuesta->role = $usuario->role;
      } else {
        $respuesta = $this->generateResponseError('usuario_ya_confirmado', 'El usuario ya fue confirmado, para el hash: ' . $confirmation_hash);
      }
    } else {
      $respuesta = $this->generateResponseError('usuario_inexistente', 'No existe ningun usuario con el hash de confirmacion: ' . $confirmation_hash);
    }
    return Response::json($respuesta, 200);
  }

  public function userForgotPassword(Request $request)
  {
    $email = $request->only('email');
    $usuario = Usuario::where('email', '=', $email)->first();
    $respuesta = new stdClass();
    if ($usuario) {
      if ($usuario->email_confirmed) {
        try {
          Mail::to($email)->send(new ForgotPasswordEmail($usuario));
          $usuario->email_confirmed = false;
          $usuario->save();
          $respuesta->message = 'Email deshabilitado correctamente';
        } catch (Exception $e) {
          $respuesta = $this->generateResponseError('error_enviando_email', 'Ocurrio un error, no se pudo enviar el email.');
        }
      } else {
        $respuesta = $this->generateResponseError('cuenta_no_validada', 'Esta cuenta todavia no fue validada.');
      }
    } else {
      $respuesta = $this->generateResponseError('email_inexistente', 'Email Inexistente.');
    }
    return Response::json($respuesta, 200);
  }
}

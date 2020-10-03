<?php
namespace Modules\Authentication\Observers;

use Illuminate\Support\Facades\Mail;
use Modules\Authentication\Entities\Usuario;
use Modules\Authentication\Entities\UsuarioPermiso;
use Modules\Authentication\Emails\NewUserEmail;
use Illuminate\Support\Facades\Hash;
use Webpatser\Uuid\Uuid;

class UsuarioObserver
{
   
  public function creating(Usuario $usuario) 
  {
    $usuario->password = Hash::make((string) $usuario->password);
    $usuario->confirmation_hash = strval(Uuid::generate());
    if($usuario->useEmailValidation()){
      $usuario->email_confirmed = false;
      $usuario->habilitado = false;
    }else{
      $usuario->email_confirmed = true;
      $usuario->habilitado = true;
    }
  }
  
  public function created(Usuario $usuario)
  {
    $permisosByDefault = new UsuarioPermiso;
    $permisosByDefault->usuario_id = $usuario->id;
    $permisosByDefault->permisos = UsuarioPermiso::mergePermissionsBasedOnRole($usuario->role);
    $permisosByDefault->habilitado = true;
    $permisosByDefault->created_by = 1;
    $permisosByDefault->save();
    try{
      if($usuario->useEmailValidation()){
        Mail::to($usuario->email)->send(new NewUserEmail($usuario));
      }
    }catch(Exception $e){
      \Log::channel('slack')->error("Error tratando de enviar el EMAIL de creacion de usuario: [".$e->getMessage()."]");
    }
  }
  
  public function updating(Usuario $usuario) 
  {
    $usuarioOld = $usuario->getOriginal();
    if ($usuario->role != $usuarioOld['role']){
      \Log::channel('slack')->info('Usuario '.$usuario->email.' cambio su ROL de '.$usuarioOld['role'].' al ROL: '.$usuario->role);
      $permisosByDefault = new UsuarioPermiso;
      $permisosByDefault->usuario_id = $usuario->id;
      $permisosByDefault->permisos =  UsuarioPermiso::mergePermissionsBasedOnRole($usuario->role);
      $permisosByDefault->habilitado = true;
      $permisosByDefault->created_by = 1;
      $permisosByDefault->save();
    }
  }

}
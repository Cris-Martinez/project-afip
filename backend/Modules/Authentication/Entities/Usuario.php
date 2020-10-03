<?php

namespace Modules\Authentication\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Modules\Application\Entities\Configuracion;



class Usuario extends Authenticatable 
{
  use Notifiable;
  
  protected $table = 'usuarios';

  protected $fillable = [
    'role', 
    'nombre',
    'email',
    'password',
    'habilitado',
    'confirmation_hash',
    'parent_entity',
    'parent_entity_id'
  ];

  public function permisos()
  {
    return $this->hasMany('Modules\Authentication\Entities\UsuarioPermiso', 'usuario_id');
  }

  public function getPermisosAsJson(){
    return  json_decode($this->permisos()->orderBy('id', 'desc')->get()->first()->permisos, true );
  }

  public function getPermisosAsString(){
    return $this->permisos()->orderBy('id', 'desc')->get()->first()->permisos;
  }

  public function tienePermiso($permisoAEvaluar){
    $permisos = $this->getPermisosAsJson();
    $permisoAEvaluarDesglosado = explode('.', $permisoAEvaluar);
    return boolval($permisos[$permisoAEvaluarDesglosado[0]][$permisoAEvaluarDesglosado[1]]["value"]);
  }

  public function useEmailValidation(){
    $permiso = Configuracion::where('clave','=','sistema.use_email_confirmation_for_new_users')->first();
    if($permiso){ 
      if(strtoupper($permiso->value) == 'TRUE'){
        return true;
      }else{
        return false;
      }
    }else{
      return false;
    }
  }
    
}

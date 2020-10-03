<?php

namespace Modules\Authentication\Entities;

use Illuminate\Database\Eloquent\Model;
use Config;

class UsuarioPermiso extends Model
{
  protected $table = 'usuario_permisos';

  protected $fillable = [
    'usuario_id',
    'permisos', 
    'habilitado',
    'created_by'
  ];

  public static function mergePermissionsBasedOnRole($role = null){

    // ROLES:
    // Role: SUPER_ADMINISTRADOR -->  [todos los permisos]
    // Role: ADMINISTRADOR       -->  [no todos los permisos]
    // Role: USUARIO         -->  [menos permisos que los anteriores]

    $permissionsTemplateDefinition =  json_decode(
                                        Config::get('authentication.Permissions.PermissionsTemplateDefinition'), true 
                                      );

    switch ($role) {
      case 'SUPER_ADMINISTRADOR':
        # super_administrador
        $rolePermissions =  json_decode(
                              Config::get('authentication.Permissions.role_super_administrador'), true 
                            );
        break;

      case 'ADMINISTRADOR':
        # administrador
        $rolePermissions =  json_decode(
                              Config::get('authentication.Permissions.role_administrador'), true 
                            );
        break;

      case 'USUARIO':
        # administrador
        $rolePermissions =  json_decode(
                              Config::get('authentication.Permissions.role_usuario'), true 
                            );
        break;

      default:
        $rolePermissions = $permissionsTemplateDefinition;
        break;
    }

    $computedUserPermissions = array_replace_recursive( $permissionsTemplateDefinition, $rolePermissions );
  
    return json_encode($computedUserPermissions);

  }
  
}
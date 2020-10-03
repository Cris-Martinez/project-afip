<?php

namespace Modules\AfipCore\Http\Controllers;

use App\Http\Controllers\AppController as AppController;
use Illuminate\Http\Request;
use stdClass;
use Response;
use JWTAuth;
use Carbon\Carbon;

class AfipCoreController extends AppController
{
  protected $moduleEntityPath = 'Modules\\AfipCore\\Entities';

  public function actualizarImagen(Request $request, $imagen, $id)
  {
    $entity = $this->showWithoutResponse($id);
    if (isset($entity->ValidationErrors)) {
      return Response::json($entity);
    }
    $coleccion = $entity->getTable();
    $itemMedia = $this->buscarImagen($entity, $coleccion, $imagen);
    if (isset($itemMedia)) {
      $itemMedia->delete();
    }
    $entity->addMedia($request->file($imagen))->withCustomProperties(['imagen' => $imagen])->toMediaCollection($coleccion);
    $entityWithMedia = new stdClass();
    $entityWithMedia->mensaje = $this->className . ' Imagen ' . $imagen . ' actualizada';
    return Response::json($entityWithMedia);
  }

  public function aprobarImagen(Request $request, $imagen, $id)
  {
    $entity = $this->showWithoutResponse($id);
    if (isset($entity->ValidationErrors)) {
      return Response::json($entity);
    }
    $mensaje = $this->className . ' Imagen ' . $imagen;
    $entityWithMedia = new stdClass();
    $itemMedia = $this->buscarImagen($entity, $entity->getTable(), $imagen);
    if (!isset($itemMedia)) {
      $entityWithMedia = $this->generateResponseError($imagen, $mensaje . ' no encontrada');
    } else {
      if ($itemMedia->hasCustomProperty('aprobada_at')) {
        $entityWithMedia = $this->generateResponseError($imagen, $mensaje . ' ya aprobada');
      } else {
        $aprobada_at = Carbon::now()->toDateTimeString();
        $aprobada_by = JWTAuth::toUser($request->input('token'))->id;
        $itemMedia->setCustomProperty('aprobada_at', $aprobada_at);
        $itemMedia->setCustomProperty('aprobada_by', $aprobada_by);
        if($itemMedia->save()) {
          $entityWithMedia->mensaje = $mensaje . ' aprobada';
        } else {
          $entityWithMedia = $this->generateResponseError($imagen, 'Error aprobacion ' . $mensaje);
        }
      }
    }
    return Response::json($entityWithMedia);
  }

}
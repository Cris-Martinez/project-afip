<?php

namespace Modules\Application\Http\Controllers;

use Modules\Application\Entities\StorageGenerico; 
use Illuminate\Http\Request;
use Response;
use stdClass;

class StorageGenericoController extends ApplicationController
{
  protected $moduleEntityPath = 'Modules\\Application\\Entities';
  protected $className = 'StorageGenerico';
  protected $useUserAudit = true;
  protected $generalValidations = [
    'nombre_archivo' => 'required',
    'tipo_archivo' => 'required',
    'path' => 'required',
    'tags' => 'required',
  ];
 
  public function show($id){
    $entity= StorageGenerico::findOrFail($id);
    $mediaItems = $entity->getMedia();
    $entityWithMedia = new stdClass();

    $entityWithMedia->nombre_archivo = $entity->nombre_archivo;
    $entityWithMedia->tipo_archivo = $entity->tipo_archivo;
    $entityWithMedia->path = $entity->path;
    $entityWithMedia->tags = $entity->tags;
    $entityWithMedia->url_to_file = $mediaItems[0]->getFullUrl();

    return Response::json($entityWithMedia);
  }

  public function store(Request $request)
  {
    $uploadedFile = $request->file('file');
    $path = $uploadedFile->getPathname();
    $filename = $uploadedFile->getClientOriginalName();

    $newEntity = $this->storeWithoutResponse($request);

    if( !isset( $newEntity->ValidationErrors ) ){
      $newEntity->addMedia($request->file('file'))->toMediaCollection();
    }

    return Response::json($newEntity);

  }

  public function update(Request $request, $id)
  {
    $entity = StorageGenerico::findOrFail($id);
     
    return Response::json($entity);
  }
}

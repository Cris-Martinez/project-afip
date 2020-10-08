<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use stdClass;
use Response;
use Auth;
use Carbon\Carbon;
use DB;

class AppController extends Controller
{
  protected $moduleEntityPath;
  protected $className;
  protected $modelInstance;

  protected $generalValidations = [];
  protected $insertValidations = [];
  protected $updateValidations = [];
  protected $deleteValidations = [];
  protected $customValidationMessages = [];

  protected $useUserAudit = false;

  protected $sendSlackNotificationOnInsert = false;
  protected $sendSlackNotificationOnUpdate = false;
  protected $sendSlackNotificationOnDelete = false;

  function __construct()
  {
    if (isset($this->className)) {
      if (isset($this->moduleEntityPath)) {
        $fullPathClassName = $this->moduleEntityPath . '\\' . $this->className;
      } else {
        $fullPathClassName = 'App\\' . $this->className;
      }
      $this->modelInstance = new $fullPathClassName();
    }
  }

  // Laravel Resource methods ------------------------------------
  public function fields()
  {
    $fields = $this->modelInstance->getFillable();
    $estructura = ['id' => null];
    foreach($fields as $field) {
      $estructura[$field] = null;
    }
    return Response::json($estructura);
  }

  public function index()
  {
    if (isset($this->modelInstance->hasView) && $this->modelInstance->hasView) {
      $this->modelInstance->setTable('v_' . $this->modelInstance->getTable());
    }
    if (isset($this->modelInstance->hasRelationship)) {
      return Response::json(
        $this->modelInstance
        ->with($this->modelInstance->hasRelationship)
        ->Where('id','>',0)->orderBy('id', 'desc')->get());
    }
    return Response::json($this->modelInstance->Where('id','>',0)->orderBy('id', 'desc')->get());
  }

  public function show($id)
  {
    if (isset($this->modelInstance->hasView) && $this->modelInstance->hasView) {
      $this->modelInstance->setTable('v_' . $this->modelInstance->getTable());
    }    
    return Response::json($this->showWithoutResponse($id));
  }

  public function store(Request $request)
  {
    return Response::json($this->storeWithoutResponse($request));
  }

  public function update(Request $request, $id)
  {
    return Response::json($this->updateWithoutResponse($request, $id));
  }

  public function destroy($id)
  {
    $entity = $this->showWithoutResponse($id);
    if (!isset($entity->ValidationErrors)) {
      if (!$entity->destroy($id)) {
        $entity = $this->generateResponseError('delete-error', 'Error eliminacion en ' . $this->className);
        //        \Log::channel('slack')->info("Error Eliminacion: [".$this->className."] Elimada por: [".JWTAuth::toUser($request->input('token'))->email."]");
      } else {
        if ($this->sendSlackNotificationOnDelete) {
          //          \Log::channel('slack')->info("Entidad Eliminada: [".$this->className."] Eliminada por: [".JWTAuth::toUser($request->input('token'))->email."]");
        }
      }
    }
    return Response::json($entity);
  }

  // END Laravel Resource methods --------------------------------

  public function showWithoutResponse($id)
  {
    $entity = $this->findWithError($id);
    if (isset($entity->ValidationErrors)) {
      return $entity;
    }
    return $this->showWithImage($entity);
  }

  public function showWithImage($entity)
  {
    try {
      $mediaItems = $entity->getMedia($entity->getTable());
      if (isset($mediaItems)) {
        $imagenes = [];
        for ($i = 0; $i < count($mediaItems); ++$i) {
          $imagenes[$mediaItems[$i]->getCustomProperty('imagen')] = [
            'url' => $mediaItems[$i]->getFullUrl(),
            'aprobada' => $mediaItems[$i]->hasCustomProperty('aprobada_at')
          ];
        }
        $entity->entityMedia = $imagenes;
      }
    } catch (\Exception $ex) {
      //
    }
    return $entity;
  }

  public function findWithError($id)
  {
    $entity = $this->modelInstance->find($id);
    if (!isset($entity)) {
      return $this->generateResponseError('entidad-inexistente', 'Error Entidad ' . $this->className . ' inexistente.');
    }
    return $entity;
  }

  public function storeWithoutResponse($request)
  {
    $generalValidator = Validator::make($request->all(), $this->generalValidations, $this->customValidationMessages);
    if ($generalValidator->fails()) {
      return $this->generateResponseError('error-validacion', 'Error ' . $this->className . ' ' . $generalValidator->messages());
    }
    $insertValidator = Validator::make($request->all(), $this->insertValidations, $this->customValidationMessages);
    if ($insertValidator->fails()) {
      return $this->generateResponseError('error-validacion', 'Error ' . $this->className . ' ' . $insertValidator->messages());
    }
    $entity = $request->all();
    if ($this->useUserAudit == true) {
      //      $entity['created_by'] = JWTAuth::toUser($request->input('token'))->id;
    }
    return $this->createWithError($request, $entity);
  }

  public function createWithError($request, $entity)
  {
    try {
      $newEntity = $this->modelInstance->create($entity);
      if ($this->sendSlackNotificationOnInsert) {
        //        \Log::channel('slack')->info("Nueva Entidad Creada: [".$this->className."] Creada por: [".JWTAuth::toUser($request->input('token'))->email."]");
      }
    } catch (\Exception $ex) {
      $newEntity = $this->generateResponseError('create-error', 'Error creacion en ' . $this->className);
      //      \Log::channel('slack')->info("Error Creacion: [" . $this->className."] Creada por: [" . JWTAuth::toUser($request->input('token'))->email."]");
    }
    return $newEntity;
  }

  public function storeWithImage(Request $request, $imagenes)
  {
    $newEntity = $this->storeWithoutResponse($request);
    if (!isset($newEntity->ValidationErrors)) {
      try {
        $coleccion = $newEntity->getTable();
        foreach ($imagenes as $imagen) {
          $newEntity->addMedia($request->file($imagen))->withCustomProperties(['imagen' => $imagen])->toMediaCollection($coleccion);
        }
      } catch (\Exception $ex) {
        $newEntity = $this->generateResponseError('error-imagen', 'Error ' . $this->className . ' en imagen ' . $imagen . '.');
      }
    }
    return $newEntity;
  }

  public function updateWithoutResponse(Request $request, $id)
  {
    $entity = $this->findWithError($id);
    if (isset($entity->ValidationErrors)) {
      return $entity;
    }
    $generalValidator = Validator::make($request->all(), $this->generalValidations, $this->customValidationMessages);
    if ($generalValidator->fails()) {
      return $this->generateResponseError('error-validacion', 'Error ' . $this->className . ' ' . $generalValidator->messages());
    }
    $updateValidator = Validator::make($request->all(), $this->updateValidations, $this->customValidationMessages);
    if ($updateValidator->fails()) {
      return $this->generateResponseError('error-validacion', 'Error ' . $this->className . ' ' . $updateValidator->messages());
    }
    $entity->fill($request->all());
    if ($this->useUserAudit == true) {
      //      $entity->updated_by = JWTAuth::toUser($request->input('token'))->id;
    }
    return $this->saveWithError($request, $entity);
  }

  public function saveWithError($request, $entity)
  {
    try {
      $entity->save();
      if ($this->sendSlackNotificationOnUpdate) {
        //        \Log::channel('slack')->info("Entidad Modificada: [".$this->className."] Modificada por: [".JWTAuth::toUser($request->input('token'))->email."]");
      }
    } catch (\Exception $ex) {
      $entity = $this->generateResponseError('update-error', 'Error modificacion en ' . $this->className);
      //      \Log::channel('slack')->info("Error Modificacion: [".$this->className."] Modificada por: [".JWTAuth::toUser($request->input('token'))->email."]");
    }
    return $entity;
  }

  public function alreadyExist(Request $request)
  {
    // ---- GET Params ----------------------------------------------
    $module = $request->query('module');
    $model  = $request->query('model');
    $column = $request->query('column');
    $value  = $request->query('value');
    //---------------------------------------------------------------
    $fullPathClassName = 'Modules\\' . $module . '\\Entities\\' . $model;
    $modelInstance = new $fullPathClassName();
    $entity = $modelInstance->where($column, $value)->first();
    return Response::json(["exist" => isset($entity)]);
  }


  public function genericFilter(Request $request)
  {
    // ---- GET Params ----------------------------------------------
    $module = $request->input('module');
    $model = $request->input('model');
    $textToSearch = $request->input('textToSearch');
    $columnWhereSearch = $request->input('columnWhereSearch');
    $columnsToBeOrderBy = $request->input('columnsToBeOrderBy');
    //---------------------------------------------------------------
    if (strcasecmp($model, "USUARIO") == 0) {
      return Response::json($this->generateResponseError('seguridad', 'Por razones de seguridad el metodo "genericSearch" no puede ser usado para el modelo USUARIO.'));
    }
    $fullClassName = '\\Modules\\' . $module . '\\Entities\\' . $model;
    $model = new $fullClassName();
    if (isset($model->hasView) && $model->hasView) {
      $model->setTable('v_' . $model->getTable());
    }
    return Response::json(
      $model->where($columnWhereSearch,'~*', trim($textToSearch))
      ->orderBy($columnsToBeOrderBy)
      ->get());
  }

  public function simpleSearch(Request $request)
  {
    // ---- GET Params ----------------------------------------------
    $module = $request->input('module');
    $model = $request->input('model');
    $textToSearch = $request->input('textToSearch');
    $columnsToBeReturned = $request->query('columnsToBeReturned');
    $columnWhereSearch = $request->input('columnWhereSearch');
    $columnsToBeOrderBy = $request->input('columnsToBeOrderBy');
    //---------------------------------------------------------------
    if (strcasecmp($model, "USUARIO") == 0) {
      return Response::json($this->generateResponseError('seguridad', 'Por razones de seguridad el metodo "genericSearch" no puede ser usado para el modelo USUARIO.'));
    }
    $fullClassName = '\\Modules\\' . $module . '\\Entities\\' . $model;
    $model = new $fullClassName();
    if (isset($model->hasView) && $model->hasView) {
      $model->setTable('v_' . $model->getTable());
    }
    return Response::json(
      $model->where($columnWhereSearch,'~*', trim($textToSearch))
      ->orderBy($columnsToBeOrderBy)
      ->get());
  }

  public function genericSearch(Request $request)
  {
    // ---- GET Params ----------------------------------------------
    $module = $request->query('module');
    $model = $request->query('model');
    $textToSearch = $request->query('textToSearch');
    //$textToSearch = strtoupper($textToSearch);
    $columnsToBeReturned = $request->query('columnsToBeReturned');
    $columnsWhereSearch = $request->query('columnsWhereSearch');
    $columnsToBeOrderBy = $request->query('columnsToBeOrderBy');
    $pageSize = $request->query('pageSize');
    $enableDebug = $request->query('enableDebug');
    //---------------------------------------------------------------
    if (strcasecmp($model, "USUARIO") == 0) {
      return Response::json($this->generateResponseError('seguridad', 'Por razones de seguridad el metodo "genericSearch" no puede ser usado para el modelo USUARIO.'));
    }
    $fullPathClassName = '\\Modules\\' . $module . '\\Entities\\' . $model;
    $modelInstance = new $fullPathClassName();
    if (isset($modelInstance->hasView) && $modelInstance->hasView) {
      $modelInstance->setTable('v_' . $modelInstance->getTable());
    }
    //$query = $modelInstance->query();
    $query = DB::table($modelInstance->getTable());
    if ($columnsToBeReturned != null) {
      $query = $query->select(explode(",", $columnsToBeReturned));
    }
    // if $textToSearch is null or empty, a general search will be performed (select * )
    // if $textToSearch is not null or empty, $columnsWhereSearch MUST have some value
    if ($textToSearch != null && trim($textToSearch) != "" && $columnsWhereSearch != null) {
      $counter = 0;
      foreach (explode(",", $columnsWhereSearch)  as $columnToSearch) {
        $counter++;
        $columnsToBeReturnedSplitted = explode("::", $columnToSearch);
        // single column, by default use orWhere
        // example:     name :: =
        // column to be search ---> name
        // operator to use     ---> =
        switch (sizeof($columnsToBeReturnedSplitted)) {
          case 1:
            if(is_numeric(trim($textToSearch))){
              $query = $query->Where(trim($columnsToBeReturnedSplitted[0]), 'like', '%' .trim($textToSearch) .'%');
            }
            else{
              $query = $query->where(trim($columnsToBeReturnedSplitted[0]), '~*', trim($textToSearch));
            }
            break;
          case 2:
            if ($counter == 1)
              $query = $query->where(trim($columnsToBeReturnedSplitted[0]), trim($columnsToBeReturnedSplitted[1]), trim($textToSearch));
            else
              $query = $query->orWhere(trim($columnsToBeReturnedSplitted[0]), trim($columnsToBeReturnedSplitted[1]), $textToSearch);
          break;
        // single column, by default use orWhere
        // example:     name :: = :: orWhere
        // column to be search ---> name
        // operator to use     ---> =
        // clause to use       ---> orWhere
          case 3:
            switch (trim($columnsToBeReturnedSplitted[2])) {
              case 'where':
                $query = $query->where(trim($columnsToBeReturnedSplitted[0]), trim($columnsToBeReturnedSplitted[1]), trim($textToSearch));
                break;
              case 'orWhere':
                $query = $query->where(trim($columnsToBeReturnedSplitted[0]), trim($columnsToBeReturnedSplitted[1]), trim($textToSearch));
                break;
              case 'whereBetween':
                $splittedValues = explode(",", $textToSearch);
                $query = $query->whereBetween(trim($columnsToBeReturnedSplitted[0]), [$splittedValues[0], $splittedValues[1]]);
                break;
              case 'orWhereBetween':
                $splittedValues = explode(",", $textToSearch);
                $query = $query->orWhereBetween(trim($columnsToBeReturnedSplitted[0]), [intval($splittedValues[0]), intval($splittedValues[1])]);
                break;
              case 'whereNotBetween':
                $splittedValues = explode(",", $textToSearch);
                //$query = $query->whereNotBetween(trim($columnsToBeReturnedSplitted[0]), [intval($splittedValues[0]), intval($splittedValues[1])]);
                $query = $query->whereBetween(trim($columnsToBeReturnedSplitted[0]), [$splittedValues[0], $splittedValues[1]]);
                 break;                
                break;
              case 'orWhereNotBetween':
                $splittedValues = explode(",", $textToSearch);
                $query = $query->orWhereNotBetween(trim($columnsToBeReturnedSplitted[0]), [intval($splittedValues[0]), intval($splittedValues[1])]);
                break;
              case 'whereIn':
                $splittedValues = explode(",", $textToSearch);
                $query = $query->whereIn(trim($columnsToBeReturnedSplitted[0]), $splittedValues);
                break;
              case 'orWhereIn':
                $splittedValues = explode(",", $textToSearch);
                $query = $query->orWhereIn(trim($columnsToBeReturnedSplitted[0]), $splittedValues);
                break;
              case 'whereNotIn':
                $splittedValues = explode(",", $textToSearch);
                $query = $query->whereNotIn(trim($columnsToBeReturnedSplitted[0]), $splittedValues);
                break;
              case 'orWhereNotIn':
                $splittedValues = explode(",", $textToSearch);
                $query = $query->orWhereNotIn(trim($columnsToBeReturnedSplitted[0]), $splittedValues);
                break;
              case 'whereNull':
                $query = $query->whereNull(trim($columnsToBeReturnedSplitted[0]));
                break;
              case 'orWhereNull':
                $query = $query->orWhereNull(trim($columnsToBeReturnedSplitted[0]));
                break;
              case 'whereNotNull':
                $query = $query->whereNotNull(trim($columnsToBeReturnedSplitted[0]));
                break;
              case 'orWhereNotNull':
                $query = $query->orWhereNotNull(trim($columnsToBeReturnedSplitted[0]));
                break;
              case 'whereDate':
                $query = $query->whereDate(trim($columnsToBeReturnedSplitted[0]), trim($columnsToBeReturnedSplitted[1]), $textToSearch);
                break;
              case 'whereDate':
                $query = $query->whereDate(trim($columnsToBeReturnedSplitted[0]), trim($columnsToBeReturnedSplitted[1]), $textToSearch);
                break;
              case 'orWhereDate':
                $query = $query->orWhereDate(trim($columnsToBeReturnedSplitted[0]), trim($columnsToBeReturnedSplitted[1]), $textToSearch);
                break;
              case 'whereMonth':
                $query = $query->whereMonth(trim($columnsToBeReturnedSplitted[0]), trim($columnsToBeReturnedSplitted[1]), $textToSearch);
                break;
              case 'orWhereMonth':
                $query = $query->orWhereMonth(trim($columnsToBeReturnedSplitted[0]), trim($columnsToBeReturnedSplitted[1]), $textToSearch);
                break;
              case 'whereDay':
                $query = $query->whereDay(trim($columnsToBeReturnedSplitted[0]), trim($columnsToBeReturnedSplitted[1]), $textToSearch);
                break;
              case 'orWhereDay':
                $query = $query->orWhereDay(trim($columnsToBeReturnedSplitted[0]), trim($columnsToBeReturnedSplitted[1]), $textToSearch);
                break;
              case 'whereYear':
                $query = $query->whereYear(trim($columnsToBeReturnedSplitted[0]), trim($columnsToBeReturnedSplitted[1]), $textToSearch);
                break;
              case 'orWhereYear':
                $query = $query->orWhereYear(trim($columnsToBeReturnedSplitted[0]), trim($columnsToBeReturnedSplitted[1]), $textToSearch);
                break;
              case 'whereTime':
                $query = $query->whereTime(trim($columnsToBeReturnedSplitted[0]), trim($columnsToBeReturnedSplitted[1]), $textToSearch);
                break;
              case 'orWhereTime':
                $query = $query->orWhereTime(trim($columnsToBeReturnedSplitted[0]), trim($columnsToBeReturnedSplitted[1]), $textToSearch);
                break;
              case 'whereColumn':
                $query = $query->whereColumn(trim($columnsToBeReturnedSplitted[0]), trim($columnsToBeReturnedSplitted[1]), $textToSearch);
                break;
              case 'orWhereColumn':
                $query = $query->orWhereColumn(trim($columnsToBeReturnedSplitted[0]), trim($columnsToBeReturnedSplitted[1]), $textToSearch);
                break;
              default:
                $query = $query->orWhere(trim($columnsToBeReturnedSplitted[0]), trim($columnsToBeReturnedSplitted[1]), $textToSearch);
                break;
            }
        }
      }
    }
    if ($columnsToBeOrderBy != null) {
      $query = $query->orderBy($columnsToBeOrderBy);
    }
    if ($enableDebug != null && $enableDebug === 'true') {
      DB::enableQueryLog();
    }
    if ($pageSize != null) {
      $resultSet = $query->paginate($pageSize);
    } else {
      //$unifiedResult = new stdClass();
      //$unifiedResult->data = $query->get();
      //$resultSet = $unifiedResult;
      $resultSet = $query->get();
    }
    if ($enableDebug != null && $enableDebug === 'true') {
      $qLog = DB::getQueryLog();
      $resultSet->sql_query = $qLog[0]['query'];
      $resultSet->sql_query_values = $qLog[0]['bindings'];
      DB::disableQueryLog();
    }
    return Response::json($resultSet);
  }

  public function quickUpdate(Request $request)
  {
    // ---- GET Params ----------------------------------------------
    $module = $request->post('module');
    $model  = $request->post('model');
    $column = $request->post('column');
    $value  = $request->post('value');
    $modelId  = $request->post('model_id');
    $useAudit  = $request->post('use_audit');
    //---------------------------------------------------------------
    if (strcasecmp($model, "USUARIO") == 0) {
      return Response::json($this->generateResponseError('seguridad', 'Por razones de seguridad el metodo "quickUpdate" no puede ser usado para el modelo USUARIO.'));
    }
    $fullPathClassName = 'Modules\\' . $module . '\\Entities\\' . $model;
    $modelInstance = new $fullPathClassName();
    $entity = $modelInstance->find($modelId);
    if (!isset($entity)) {
      return Response::json($this->generateResponseError('entidad-inexistente', 'Error Entidad ' . $model . ' inexistente.'));
    }
    $entity->$column = $value;
    if ($useAudit == "true") {
      //      $entity->updated_by = JWTAuth::toUser($request->input('token'))->id;
    }
    return $this->saveWithError($request, $entity);
  }

  public function generateResponseError($title, $message)
  {
    $newEntity = new stdClass();
    $errorMessage = new stdClass();
    $errorMessage->$title =  array($message);
    $newEntity->ValidationErrors = $errorMessage;
    return $newEntity;
  }

  public function changeHabilitar(Request $request, $id, $value)
  {
    $entity = $this->findWithError($id);
    if (isset($entity->ValidationErrors)) {
      return $entity;
    }
    $entity->habilitado = $value;
    $entity->updated_at = Carbon::now()->toDateTimeString();
    //    $entity->updated_by = JWTAuth::toUser($request->input('token'))->id;;
    return $this->saveWithError($request, $entity);
  }

  public function habilitar(Request $request, $id)
  {
    return Response::json($this->changeHabilitar($request, $id, true));
  }

  public function deshabilitar(Request $request, $id)
  {
    return Response::json($this->changeHabilitar($request, $id, false));
  }

  public function buscarImagen($entity, $coleccion, $imagen)
  {
    $itemMedia = null;
    $mediaItems = $entity->getMedia($coleccion);
    if (isset($mediaItems)) {
      for ($i = 0; $i < count($mediaItems); ++$i) {
        if ($mediaItems[$i]->getCustomProperty('imagen') == $imagen) {
          $itemMedia = $mediaItems[$i];
          break;
        }
      }
    }
    return $itemMedia;
  }
}
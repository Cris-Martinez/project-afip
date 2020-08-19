<?php

namespace Modules\AfipCore\Entities;

use Illuminate\Database\Eloquent\Model;

class Localidad extends Model
{
  protected $table = 'localidades';

  protected $fillable = [
		'nombre',
		'provincia_id',
		'created_by',
  ];

  protected $hiden = [
    // ...
    'created_by', 'updated_by', 'created_at', 'updated_at',
  ];

  public $validationObserverMessage = null;

}

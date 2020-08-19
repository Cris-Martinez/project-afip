<?php

namespace Modules\AfipCore\Entities;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
  protected $table = 'provincias';

  protected $fillable = [
		'nombre',
		'pais_id',
		'created_by',
  ];

  protected $hiden = [
    // ...
    'created_by', 'updated_by', 'created_at', 'updated_at',
  ];

  public $validationObserverMessage = null;

}

<?php

namespace Modules\AfipCore\Entities;

use Illuminate\Database\Eloquent\Model;

class CategoriaIva extends Model
{
  protected $table = 'categoria_ivas';

  protected $fillable = [
		'nombre',
		'created_by',
  ];

  protected $hiden = [
    // ...
    'created_by', 'updated_by', 'created_at', 'updated_at',
  ];

  public $validationObserverMessage = null;

}

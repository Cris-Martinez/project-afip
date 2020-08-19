<?php

namespace Modules\Modulo\Entities;

use Illuminate\Database\Eloquent\Model;

class Entidad extends Model
{
  protected $table = 'entidad';

  protected $fillable = [
  ];

  protected $hiden = [
    // ...
    'created_by', 'updated_by', 'created_at', 'updated_at',
  ];

  public $validationObserverMessage = null;

}
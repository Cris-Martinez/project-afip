<?php

namespace Modules\Application\Entities;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class StorageGenerico extends Model implements HasMedia
{
  use HasMediaTrait;
  protected $table = 'storage_generico';

  protected $fillable = [
    'nombre_archivo', 
    'tipo_archivo', 
    'path', 
    'tags'
  ];
    
}

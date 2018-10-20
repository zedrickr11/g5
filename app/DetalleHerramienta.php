<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleHerramienta extends Model
{
  protected $table='detalle_herramienta';

  protected $primaryKey='iddetalle_herramienta';
  public $timestamps=false;

  protected $fillable =[
    'idrutina_mantenimiento',
    'idherramienta',
  

  ];
  protected $guarded =[
  ];
}

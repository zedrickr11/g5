<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalle_ingreso_insumo extends Model
{
  protected $table='detalle_insumo_rutina';

  protected $primaryKey='iddetalle_insumo_rutina';
  public $timestamps=false;

  protected $fillable =[
    'idingreso_insumo',
    'idinsumo',
    'cantidad'

  ];
  protected $guarded =[
  ];
}

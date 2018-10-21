<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalle_ingreso_insumo extends Model
{
  protected $table='detalle_ingreso_insumo';

  protected $primaryKey='iddetalle_ingreso_insumo';
  public $timestamps=false;

  protected $fillable =[
    'idingreso_insumo',
    'idinsumo',
    'cantidad'

  ];
  protected $guarded =[
  ];
}

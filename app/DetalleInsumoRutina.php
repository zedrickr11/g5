<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleInsumoRutina extends Model
{
  protected $table='detalle_insumo_rutina';

  protected $primaryKey='iddetalle_insumo_rutina';
  public $timestamps=false;

  protected $fillable =[
    'idrutina_mantenimiento',
    'idinsumo',
    'cantidad'

  ];
  protected $guarded =[
  ];
}

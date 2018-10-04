<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalle_ingreso_repuesto extends Model
{
  protected $table='detalle_ingreso_repuesto';

  protected $primaryKey='iddetalle_ingreso_repuesto';
  public $timestamps=false;

  protected $fillable =[
    'idingreso_repuesto',
    'idrepuesto',
    'cantidad'

  ];
  protected $guarded =[
  ];
}

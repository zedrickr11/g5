<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleRepuestoRutina extends Model
{
  protected $table='detalle_repuesto_rutina';

  protected $primaryKey='iddetalle_repuesto_rutina';
  public $timestamps=false;

  protected $fillable =[
    'idrutina_mantenimiento',
    'idrepuesto',
    'cantidad'

  ];
  protected $guarded =[
  ];
}

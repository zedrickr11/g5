<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleRutinaPrueba extends Model
{
  protected $table='detalle_rutina_prueba';

  protected $primaryKey='iddetalle_rutina_prueba';
  public $timestamps=false;

  protected $fillable =[
    'idrutina_mantenimiento',
    'idprueba_rutina',
    'idvalor_ref_prueba',
    'idsubgrupo_prueba',
    'norma_detalle_rutina_prueba',
    'unidad_medida_detalle_rutina_prueba',
    'estado_detalle_rutina_prueba',
    'fecha_detalle_rutina_prueba',
    'comentario_detalle_rutina_prueba'

  ];
  protected $guarded =[
  ];
}

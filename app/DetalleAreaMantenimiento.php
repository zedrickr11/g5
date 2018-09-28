<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleAreaMantenimiento extends Model
{
  protected $table='detalle_area_matenimiento';
  protected $primaryKey='iddetalle_area_matenimiento';
  public $timestamps=false;

  protected $fillable =[
       'area_mantenimiento_idarea_mantenimiento',
       'solitud_trabajo_idsolitud_trabajo',
       'estado_detalle_area_matenimiento'

  ];

  protected $guarded =[

  ];
}

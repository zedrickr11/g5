<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleAreaMantenimiento extends Model
{
  protected $table='detalle_area_matenimiento';
  protected $primaryKey='iddetalle_area_matenimiento';
  public $timestamps=false;

  protected $fillable =[
       'idarea_mantenimiento',
       'idsolitud_trabajo',
       'area_matenimiento'

  ];

  protected $guarded =[

  ];
}

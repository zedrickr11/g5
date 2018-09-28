<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetallePrecaucionEjecutante extends Model
{
  protected $table='detalle_precaucion_ejecutante';
  protected $primaryKey='iddetalle_precaucion_ejecutante';
  public $timestamps=false;

  protected $fillable =[
       'idpermiso_trabajo',
       'idprecaucion_ejecutante',
       'estado_detalle_precaucion_ejecutante'

  ];

  protected $guarded =[

  ];
}

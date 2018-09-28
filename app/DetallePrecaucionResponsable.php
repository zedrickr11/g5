<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetallePrecaucionResponsable extends Model
{
  protected $table='detalle_precaucion_responsable';
  protected $primaryKey='iddetalle_precaucion_responsable';
  public $timestamps=false;

  protected $fillable =[
       'idpermiso_trabajo',
       'idprecaucion_responsable',
       'estado_detalle_precaucion_responsable'

  ];

  protected $guarded =[

  ];
}

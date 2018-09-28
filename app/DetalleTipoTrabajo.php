<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleTipoTrabajo extends Model
{
  protected $table='detalle_tipo_trabajo';
  protected $primaryKey='iddetalle_tipo_trabajo';
  public $timestamps=false;

  protected $fillable =[
    'solitud_trabajo_idsolitud_trabajo',
       'tipo_trabajo_idtipo_trabajo',
       'descrpcion_detalle_tipo_trabajo',
       'estado'


  ];

  protected $guarded =[

  ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleTipoTrabajoPermiso extends Model
{
  protected $table='detalle_tipo_trabajo_permiso';
  protected $primaryKey='iddetalle_tipo_trabajo_permiso';
  public $timestamps=false;

  protected $fillable =[
    'idpermiso_trabajo',
       'tipo_trabajo_idtipo_trabajo',
       'estado_detalle_tipo_trabajo_permiso',
       'descripcion_detalle_tipo_trabajo_permiso'


  ];

  protected $guarded =[

  ];
}

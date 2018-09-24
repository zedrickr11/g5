<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ruman extends Model
{
  protected $table='rutina_mantenimiento';

  protected $primaryKey='idrutina_mantenimiento';

  public $timestamps=false;


  protected $fillable =[
      'idtipo_rutina',
      'idequipo',
      'fecha_realizacion_rutina',
      'observaciones_rutina',
      'tiempo_estimado_rutina_mantenimiento',
      'responsable_area_rutina_mantenimiento',
      'permiso_trabajo_idpermiso_trabajo',
      'estado_rutina',
      
  ];

  protected $guarded =[

  ];
}

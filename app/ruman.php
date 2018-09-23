<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ruman extends Model
{
  protected $table='rutina_mantenimiento','notificacion';

  protected $primaryKey='idrutina_mantenimiento','idnotificacion';

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
      'idnotificacion',
      'descripcion_noti',
      'fecha_creacion_noti',
      'fecha_finalizacion_noti',
      'hora_finalizacion_noti',
      'rutina_mantenimiento_idrutina_mantenimiento',
      'estado_notificacion',
  ];

  protected $guarded =[

  ];
}

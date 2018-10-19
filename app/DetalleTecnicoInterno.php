<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleTecnicoInterno extends Model
{
  protected $table='rutina_mantenimiento_tecnico_interno';
  protected $primaryKey='idrutina_mantenimiento_tecnico_interno';
  public $timestamps=false;

  protected $fillable =[
       'idrutina_mantenimiento',
       'idtecnico',
       'tiempo_ejecucion_rutina_mantenimiento_tecnico_interno'

  ];

  protected $guarded =[

  ];
}

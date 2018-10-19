<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleTecnicoExterno extends Model
{
  protected $table='rutina_mantenimiento_tecnico_externo';
  protected $primaryKey='idrutina_mantenimiento_tecnico_externo';
  public $timestamps=false;

  protected $fillable =[
       'idrutina_mantenimiento',
       'idtecnico_externo',
       'tiempo_ejecucion_rutina_mantenimiento_tecnico_externo'

  ];

  protected $guarded =[

  ];
}

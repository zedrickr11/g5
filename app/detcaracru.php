<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detcaracru extends Model
{
  protected $table='detalle_caracteristica_rutina';

  protected $primaryKey='iddetalle_caracteristica_rutina';

  public $timestamps=false;


  protected $fillable =[
      'idcaracteristica_rutina',
      'idrutina_mantenimiento',
      'idvalor_ref_rutina',
      'idsubgrupo_rutina',
      'estado_detalle_caracteristica_rutina',
      'fecha_detalle_caracteristica_rutina',
      'comentario_detalle_caracteristica_rutina'
  ];

  protected $guarded =[

  ];
}

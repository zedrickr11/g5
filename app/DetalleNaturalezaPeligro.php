<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleNaturalezaPeligro extends Model
{
  protected $table='detalle_naturaleza_peligro';
  protected $primaryKey='iddetalle_naturaleza_peligro';
  public $timestamps=false;

  protected $fillable =[
       'idnaturaleza_peligro',
       'idpermiso_trabajo',
       'estado_detalle_naturaleza_peligro'

  ];

  protected $guarded =[

  ];
}

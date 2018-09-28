<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SolicitudTrabajo extends Model
{
  protected $table='solitud_trabajo';
  protected $primaryKey='idsolitud_trabajo';
  public $timestamps=false;

  protected $fillable =[
    'numero',
    'fecha',
    'descripcion',
    'compra_material',
    'contratar_trabajo',
    'dirigido_solitud_trabajo',
    'puesto_dirigido_solitud_trabajo',
    'edificio_solitud_trabajo',
    'jefe_solitud_trabajo',
  ];

  protected $guarded =[

  ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoTrabajo extends Model
{
  protected $table='tipo_trabajo';
  protected $primaryKey='idtipo_trabajo';
  public $timestamps=false;

  protected $fillable =[
    'idtipo_trabajo',
       'nombre_tipo'


  ];

  protected $guarded =[

  ];
}

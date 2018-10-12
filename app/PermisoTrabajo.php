<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PermisoTrabajo extends Model
{
  protected $table='permiso_trabajo';
  protected $primaryKey='idpermiso_trabajo';
  public $timestamps=false;

  protected $fillable =[
       'fecha',
       'num_permiso',
       'descripcion',
       'idsolitud_trabajo',


  ];

  protected $guarded =[

  ];
}

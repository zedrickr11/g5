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
       'solitud_trabajo_idsolitud_trabajo',


  ];

  protected $guarded =[

  ];
}

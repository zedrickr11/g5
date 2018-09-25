<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seguimiento extends Model
{
  protected $table='seguimiento';
  protected $primaryKey='idseguimiento';
  public $timestamps=false;

  protected $fillable =[
    'fecha_seguimiento',
    'responsable_seguimiento',
    'solitud_trabajo_idsolitud_trabajo',



  ];

  protected $guarded =[

  ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrecaucionEjecutante extends Model
{
  protected $table='precaucion_ejecutante';
  protected $primaryKey='idprecaucion_ejecutante';
  public $timestamps=false;

  protected $fillable =[
       'precaucion_ejecutante'
  ];

  protected $guarded =[

  ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrecaucionResponsable extends Model
{
  protected $table='precaucion_responsable';
  protected $primaryKey='idprecaucion_responsable';
  public $timestamps=false;

  protected $fillable =[
       'precaucion_responsable'


  ];

  protected $guarded =[

  ];
}

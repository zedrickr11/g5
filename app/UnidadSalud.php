<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UnidadSalud extends Model
{
  protected $table='unidadsalud';
  protected $primaryKey='idunidadsalud';
  public $timestamps=false;

  protected $fillable =[
       'idunidadsalud',
       'unidad_salud',
       'idhospital'


  ];

  protected $guarded =[

  ];
}

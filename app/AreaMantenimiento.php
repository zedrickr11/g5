<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AreaMantenimiento extends Model
{
  protected $table='area_mantenimiento';
  protected $primaryKey='idarea_mantenimiento';
  public $timestamps=false;

  protected $fillable =[
       'area_mantenimiento'


  ];

  protected $guarded =[

  ];
}

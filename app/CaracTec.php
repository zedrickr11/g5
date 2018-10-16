<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CaracTec extends Model
{
  protected $table='caracteristica_tecnica';

  protected $primaryKey='idcaracteristica_tecnica';

  public $timestamps=false;


  protected $fillable =[
      'nombre_caracteristica_tecnica',
  ];

  protected $guarded =[

  ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pruru extends Model
{
  protected $table='prueba_rutina';

  protected $primaryKey='idprueba_rutina';

  public $timestamps=false;


  protected $fillable =[
      'prueba_rutina'
  ];

  protected $guarded =[

  ];
}

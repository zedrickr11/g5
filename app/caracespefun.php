<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class caracespefun extends Model
{
  protected $table='caracteristica_especial_funcionamiento';

  protected $primaryKey='idcaracteristica_especial';

  public $timestamps=false;


  protected $fillable =[
      'nombre_caracteristica_especial'
  ];

  protected $guarded =[

  ];
}

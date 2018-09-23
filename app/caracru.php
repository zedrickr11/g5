<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class caracru extends Model
{
  protected $table='caracteristica_rutina';

  protected $primaryKey='idcaracteristica_rutina';

  public $timestamps=false;


  protected $fillable =[
      'caracteristica_rutina'
  ];

  protected $guarded =[

  ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagen_equipo extends Model
{
  protected $table='imagen_equipo';
  protected $primaryKey='idimagen';
  public $timestamps=false;

  protected $fillable =[

       'idequipo',
       'imagen',
       'descripcion_imagen'


  ];

  protected $guarded =[

  ];
}

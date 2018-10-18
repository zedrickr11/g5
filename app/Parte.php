<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parte extends Model
{
    protected $table='parte_equipo';
    protected $primaryKey='idparte_equipo';
    public $timestamps=false;

    protected $fillable =[
          'nombre_parte',
          'num_parte',
          'descripcion',
          'idequipo'
    ];

    protected $guarded =[

    ];
}

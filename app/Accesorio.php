<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accesorio extends Model
{
    protected $table='accesorio_equipo';
    protected $primaryKey='idaccesorio';
    public $timestamps=false;

    protected $fillable =[
          'nombre_accesorio',
          'descripcion_accesorio',
          'idequipo',
          'numero_parte_accesorio'

    ];

    protected $guarded =[

    ];
}

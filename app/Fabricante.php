<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fabricante extends Model
{
    protected $table='fabricante';

    protected $primaryKey='idfabricante';

    public $timestamps=false;


    protected $fillable =[
    	  'direccion_fabricante',
    	  'telefono_fabricante',
        'fax_fabricante',
        'correo_fabricante',
        'contacto_fabricante',
        'direccion_guatemala_fabricante',
        'telefono_guatemala_fabricante',
        'correo_guatemala_fabricante'
    ];

    protected $guarded =[

    ];
}

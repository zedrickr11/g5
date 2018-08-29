<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServicioTecnico extends Model
{

    protected $table='servicio_tecnico';

    protected $primaryKey='idservicio_tecnico';

    public $timestamps=false;


    protected $fillable =[
    	  'direccion_servicio_tecnico',
    	  'telefono_servicio_tecnico',
        'fax_servicio_tecnico',
        'correo_servicio_mantenimiento',
        'nombre_contacto_servicio_tecnico',
        'nombre_empresa_sevicio_tecnico'
    ];

    protected $guarded =[

    ];
}

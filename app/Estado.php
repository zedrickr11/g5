<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $table='estado_equipo';

    protected $primaryKey='idestado';

    public $timestamps=false;


    protected $fillable =[
    	  'estado'
    ];

    protected $guarded =[

    ];
}

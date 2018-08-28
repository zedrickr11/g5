<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoManual extends Model
{
    protected $table='tipomanual';
    protected $primaryKey='idtipomanual';
    public $timestamps=false;
    protected $fillable =[
    	  'nombre_tipo_manual'
    ];

    protected $guarded =[

    ];
}

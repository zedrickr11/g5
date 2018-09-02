<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoUnidadSalud extends Model
{
    //
    protected $table='tipounidadsalud';
    protected $primaryKey='idtipounidad';
    public $timestamps=false;

    protected $fillable =[
         'idtipounidad',
         'nivel_atencion',
         'categoria',
         'comp_res',
         'unidad_medica',
         'idhospital'


    ];

    protected $guarded =[

    ];
}

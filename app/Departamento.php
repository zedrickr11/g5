<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    //
    protected $table='departamento';
      protected $casts = ['iddepartamento' => 'string'];
    protected $primaryKey='iddepartamento';
    public $timestamps=false;

    protected $fillable =[
         'iddepartamento',
         'depto',
         'idhospital',
         'idregion'


    ];

    protected $guarded =[

    ];
}

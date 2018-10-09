<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Repuesto extends Model
{
  protected $table='repuesto';

  protected $primaryKey='idrepuesto';

  public $timestamps=false;


  protected $fillable =[


    'nombre',
    'codigo',
    'num_serie',
    'modelo',
    'descripcion',
    'stock',
    'idequipo',
    'estado'
  ];

  protected $guarded =[

  ];
}

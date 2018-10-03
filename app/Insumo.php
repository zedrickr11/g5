<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Insumo extends Model
{
  protected $table='insumo';

  protected $primaryKey='idinsumo';

  public $timestamps=false;


  protected $fillable =[


    'nombre',
    'codigo',
    'descripcion',
    'stock',
    'estado'
  ];

  protected $guarded =[

  ];
}

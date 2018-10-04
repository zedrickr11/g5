<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor_insumo extends Model
{
  protected $table='proveedor_insumo';

  protected $primaryKey='idproveedor_insumo';

  public $timestamps=false;


  protected $fillable =[
    'nombre',
    'direccion',
    'telefono',
    'email',
    'estado'
  ];

  protected $guarded =[

  ];
}

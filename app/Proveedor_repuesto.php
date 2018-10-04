<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor_repuesto extends Model
{
  protected $table='proveedor_repuesto';

  protected $primaryKey='idproveedor_repuesto';

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

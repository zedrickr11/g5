<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
  protected $table='proveedor';

  protected $primaryKey='id_proveedor';

  public $timestamps=false;


  protected $fillable =[
      'direccion_proveedor',
      'telefono_proveedor',
      'fax_proveedor',
      'correo_proveedor',
      'contacto_proveedor',

  ];

  protected $guarded =[

  ];
}

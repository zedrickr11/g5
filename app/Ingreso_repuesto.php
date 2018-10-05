<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingreso_repuesto extends Model
{
  protected $table='ingreso_repuesto';

  protected $primaryKey='idingreso_repuesto';

  public $timestamps=false;

  protected $fillable =[

    'tipo_comprobante',
    'serie_comprobante',
    'num_comprobante',
    'fecha_hora',
    'estado',
    'idproveedor_repuesto'
  ];
  protected $guarded =[
  ];
}

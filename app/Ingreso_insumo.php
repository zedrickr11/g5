<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingreso_insumo extends Model
{
  protected $table='ingreso_insumo';

  protected $primaryKey='idingreso_insumo';

  public $timestamps=false;

  protected $fillable =[

    'tipo_comprobante',
    'serie_comprobante',
    'num_comprobante',
    'fecha_hora',
    'estado',
    'idproveedor_insumo'
  ];
  protected $guarded =[
  ];
}

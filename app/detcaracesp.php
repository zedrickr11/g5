<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detcaracesp extends Model
{
  protected $table='detalle_caracteristica_especial';

  //protected $primaryKey='idcaracteristica_especial';

  public $timestamps=false;


  protected $fillable =[
      'idequipo',
      'idvalor_ref_esp',
      'idcaracteristica_especial',
      'estado_detalle_caracteristica_especial',
      'descripcion_detalle_caracteristica_especial',
      'valor_detalle_caracteristica_especial'
  ];

  protected $guarded =[

  ];
}

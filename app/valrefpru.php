<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class valrefpru extends Model
{
  protected $table='valor_ref_prueba';

  protected $primaryKey='idvalor_ref_prueba';

  public $timestamps=false;


  protected $fillable =[
      'descripcion'
  ];

  protected $guarded =[

  ];
}

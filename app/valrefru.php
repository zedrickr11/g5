<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class valrefru extends Model
{
  protected $table='valor_ref_rutina';

  protected $primaryKey='idvalor_ref_rutina';

  public $timestamps=false;


  protected $fillable =[
      'descripcion'
  ];

  protected $guarded =[

  ];
}

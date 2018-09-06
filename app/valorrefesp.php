<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class valorrefesp extends Model
{
  protected $table='valor_ref_esp';

  protected $primaryKey='idvalor_ref_esp';

  public $timestamps=false;


  protected $fillable =[
      'nombre_valor_ref_esp'
  ];

  protected $guarded =[

  ];
}

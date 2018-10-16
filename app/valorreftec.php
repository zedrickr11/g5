<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class valorreftec extends Model
{
  protected $table='valor_ref_tec';

  protected $primaryKey='idvalor_ref_tec';

  public $timestamps=false;


  protected $fillable =[
      'nombre_valor_ref_tec',

  ];

  protected $guarded =[

  ];
}

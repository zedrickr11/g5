<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subcaractec extends Model
{
  protected $table='subgrupo_carac_tecnica';

  protected $primaryKey='idsubgrupo_carac_tecnica';

  public $timestamps=false;


  protected $fillable =[
      'nombre_subgrupo_carac_tecnica'
  ];

  protected $guarded =[

  ];
}

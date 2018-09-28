<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subpru extends Model
{
  protected $table='subgrupo_prueba';

  protected $primaryKey='idsubgrupo_prueba';

  public $timestamps=false;


  protected $fillable =[
      'subgrupo_prueba'
  ];

  protected $guarded =[

  ];
}

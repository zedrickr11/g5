<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subru extends Model
{
  protected $table='subgrupo_rutina';

  protected $primaryKey='idsubgrupo_rutina';

  public $timestamps=false;


  protected $fillable =[
      'subgrupo_rutina'
  ];

  protected $guarded =[

  ];
}

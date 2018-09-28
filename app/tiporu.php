<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tiporu extends Model
{
  protected $table='tipo_rutina';

  protected $primaryKey='idtipo_rutina';

  public $timestamps=false;


  protected $fillable =[
      'tipo_rutina'
  ];

  protected $guarded =[

  ];
}

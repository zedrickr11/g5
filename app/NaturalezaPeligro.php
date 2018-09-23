<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NaturalezaPeligro extends Model
{
  protected $table='naturaleza_peligro';
  protected $primaryKey='idnaturaleza_peligro';
  public $timestamps=false;

  protected $fillable =[
       'naturaleza_peligro'


  ];

  protected $guarded =[

  ];
}

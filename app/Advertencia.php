<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advertencia extends Model
{
  protected $table='advertencia';
  protected $primaryKey='idadvertencia';
  public $timestamps=false;

  protected $fillable =[
       'idadvertencia',
       'nombre_advertencia',
       'valor_advertencia',
       'equipo_idequipo'


  ];

  protected $guarded =[

  ];
}

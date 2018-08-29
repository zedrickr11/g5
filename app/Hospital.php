<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
  protected $table='hospital';
  protected $primaryKey='idhospital';
  public $timestamps=false;

  protected $fillable =[
       'idhospital',
       'hospital',
       'clave_admin'	


  ];

  protected $guarded =[

  ];
}

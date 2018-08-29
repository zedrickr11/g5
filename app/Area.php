<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{

      protected $table='area';
      protected $casts = ['idarea' => 'string'];
      protected $primaryKey='idarea';

      public $timestamps=false;


      protected $fillable =[
          'idarea',
          'nombre_area'

      ];

      protected $guarded =[

      ];
}

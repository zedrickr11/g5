<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asignacion extends Model
{
      protected $table='role_user';
      
      protected $primaryKey='id';

      


      protected $fillable =[
          'user_id',
          'role_id'

      ];

      protected $guarded =[

      ];
}

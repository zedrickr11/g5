<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    //
    protected $table='region';
          protected $casts = ['idregion' => 'string'];
    protected $primaryKey='idregion';
    public $timestamps=false;

    protected $fillable =[
         'idregion',
         'region'


    ];

    protected $guarded =[

    ];

}

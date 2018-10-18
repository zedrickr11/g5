<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Herramienta extends Model
{
    protected $table='herramienta';
    protected $primaryKey='idherramienta';
    public $timestamps=false;
    protected $fillable =[
          'herramienta'
    ];
    protected $guarded =[

    ];
}

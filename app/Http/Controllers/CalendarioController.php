<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

use App\Notificacion;
use App\Rutina_mantenimiento;
use App\Equipo;

use DB;


class CalendarioController extends Controller
{
    function __construct()
      {
        $this->middleware(['auth','role:admin,jefe-mantto']);
      }
    public function llenarcalendario()
    {
     $eventos = DB::table('notificacion')
     ->select('*')
     ->get();

     return response()->json($eventos);

    }
    
}

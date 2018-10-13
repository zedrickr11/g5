<?php

namespace App\Http\Controllers;


use App\Equipo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//falta el form Request
use App\Http\Requests\EquipoFormRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;

use App\Imagen_equipo;
use App\Proveedor;
use App\UnidadSalud;
use App\Area;
use App\Estado;
use App\ServicioTecnico;
use App\Fabricante;
use App\Hospital;
use App\Departamento;
use App\Region;
use App\Grupo;
use App\Subgrupo;
use App\Conf_corr;
use App\TipoUnidadSalud;
use App\fichatecnica;
use App\detcaractec;
use App\TipoManual;
use App\Detalle_manual;
USE App\CaracTec;
USE App\subcaractec;
USE App\valorreftec;
USE App\ruman;
use App\tiporu;
use App\PermisoTrabajo;
use Barryvdh\DomPDF\Facade as PDF;

use Carbon\Carbon;
use DB;


class EquipoIndexController extends Controller
{
    public function index($id)
    {
      $proveedor=Proveedor::all();
      $unidad_salud=UnidadSalud::all();
      $area=Area::all();
      $estado=Estado::all();
      $servicio_tecnico=ServicioTecnico::all();
      $fabricante=Fabricante::all();
      $hospital=Hospital::all();
      $departamento=Departamento::all();
      $region=Region::all();
      $grupo=Grupo::all();
      $subgrupo=Subgrupo::all();
      $tipounidadsalud=TipoUnidadSalud::all();
      //rutinas
      $tiporu=tiporu::all();
      $permisotrabajo=PermisoTrabajo::all();
      $ruman=ruman::all();


      $imagen_equipo=DB::table('Imagen_equipo')
      ->select('*')
      ->where('idequipo','=',$id)
      ->get();

      $TipoManual = TipoManual::all();
      $EquipoM = Equipo::all();
      $Detalle_manual = Detalle_manual::all();


      //$equipo=Equipo::findOrFail($id);
      $equipo=DB::table('equipo as e')
        ->join('subgrupo as s','s.idsubgrupo','=','e.idsubgrupo')
        ->join('conf_corr as c','s.idsubgrupo','=','c.idsubgrupo')
        ->join('hospital as h','h.idhospital','=','e.idhospital')
        ->select('e.*','c.actual as actual','s.codigosubgrupo as codigosubgrupo','h.hospital as hospi',DB::raw('CONCAT(e.idarea,e.idgrupo,s.codigosubgrupo, "-",e.idregion,e.iddepartamento,e.idtipounidad,e.idunidadsalud,c.actual) AS codigo'))
        ->where('e.idequipo','=',$id)
        ->first();

      return view('equipo.vista.index', compact('tiporu','permisotrabajo','ruman','equipo','proveedor','unidad_salud','area',
                  'estado','servicio_tecnico','fabricante','hospital','departamento',
                  'region','grupo','subgrupo','tipounidadsalud','TipoManual','EquipoM',
                                                'Detalle_manual','imagen_equipo'));


      }


    public function store(Request $request){

      $manual = new Detalle_manual;
      $manual->idtipomanual=$request->get('idtipomanual');
      $manual->idequipo=$request->get('idequipo');
      $manual->observacion_detalle_manual=$request->get('observacion_detalle_manual');

      if (Input::hasFile('imagen')){
        $file=Input::file('imagen');
        $file->move(public_path().'/equipo/manuales',$file->getClientOriginalName());
          $manual->link_detalle_manual=$file->getClientOriginalName();
      }

      $manual->save();
      return back();

    }


}

<?php

namespace App\Http\Controllers;

use App\Equipo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//falta el form Request
use App\Http\Requests\EquipoFormRequest;

use Illuminate\Support\Facades\Input;

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
USE App\CaracTec;
USE App\subcaractec;
USE App\valorreftec;
use Barryvdh\DomPDF\Facade as PDF;

use Carbon\Carbon;
use DB;


class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      if ($request)
      {
          $query=trim($request->get('searchText'));
          $equipos= DB::table('equipo as e')
          ->join('estado_equipo as h','h.idestado','=','e.idestado')
          ->select('e.idequipo','e.nombre_equipo','e.marca','e.modelo','e.serie','h.estado as estado')
          ->where('e.nombre_equipo','LIKE','%'.$query.'%')
          ->orderBy('e.idequipo','desc')
          ->paginate(10);
          return view('equipo.equipo.index',["equipos"=>$equipos,"searchText"=>$query]);
      }
    }
    public function nuevo()
    {

        return view("equipo.equipo.nuevo");
    }
    public function grupo(){
      $area_id = Input::get('area_id');
      $grupo = DB::table('grupo as g')
      ->select('g.idgrupo','g.grupo')
      ->where('g.idarea','=',$area_id)
      ->get();
      return response()->json($grupo);
    }
    public function subgrupo(){
      $grupo_id = Input::get('grupo_id');
      $subgrupo = DB::table('subgrupo as s')
      ->select('s.idsubgrupo','s.subgrupo')
      ->where('s.idgrupo','=',$grupo_id)
      ->get();
      return response()->json($subgrupo);
    }
    public function correlativo(){
      $subgrupo_id = Input::get('subgrupo_id');
      $correlativo = DB::table('Conf_corr as c')
      ->select('c.actual')
      ->where('c.idsubgrupo','=',$subgrupo_id)
      ->get();
      return response()->json($correlativo);
    }
    public function codigosubgrupo(){
      $subgrupo_id = Input::get('subgrupo_id');
      $codigosubgrupo = DB::table('subgrupo as s')
      ->select('s.codigosubgrupo')
      ->where('s.idsubgrupo','=',$subgrupo_id)
      ->get();
      return response()->json($codigosubgrupo);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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

      return view("equipo.equipo.create",compact('proveedor','unidad_salud','area',
                  'estado','servicio_tecnico','fabricante','hospital','departamento',
                  'region','grupo','subgrupo','tipounidadsalud'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EquipoFormRequest $request)
    {
      Equipo::create($request->all());
      return redirect()->route('equipo.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


  }

    public function ficha($id)
    {
    //   $equipo = Equipo::all();
      // $equipo = Equipo::where('idequipo', $id)->first();

    //  $equipo=Equipo::findOrFail($id);
    $proveedor=Proveedor::all();
    $unidadsalud=UnidadSalud::all();
    $area=Area::all();
    $estado=Estado::all();
    $serviciotecnico=ServicioTecnico::all();
    $fabricante=Fabricante::all();
    $hospital=Hospital::all();
    $departamento=Departamento::all();
    $region=Region::all();
    $grupo=Grupo::all();
    $subgrupo=Subgrupo::all();
    $tipounidadsalud=TipoUnidadSalud::all();
    $detcaractec=detcaractec::all();
    $CaracTec=CaracTec::all();
    $subcaractec=subcaractec::all();
    $valorreftec=valorreftec::all();
    $equipo=DB::table('equipo')->where('idequipo', $id)->get();
//$view= view("equipo.caracteristica.fichatecnica.show",compact('equipo'));

        $pdf = PDF::loadView("equipo.caracteristica.fichatecnica.show",compact('equipo','proveedor','unidadsalud','area',
                    'estado','serviciotecnico','fabricante','hospital','departamento',
                    'region','grupo','subgrupo','tipounidadsalud','detcaractec','CaracTec','subcaractec','valorreftec'));

        return $pdf->stream('FICHA TÉCNICA"'.$id.'".pdf');
        //return view("equipo.caracteristica.fichatecnica.show",compact('equipo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipo $equipo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipo $equipo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipo $equipo)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Equipo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
//falta el form Request
use App\Http\Requests\EquipoFormRequest;

use Illuminate\Support\Facades\Input;
use App\User;
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
    function __construct()
    {
      $this->middleware(['auth','role:admin,jefe-mantto,jefe-sub,tec-ing']);
    }
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
          ->select('*')
          ->where('e.users_id','=', auth()->id())
          ->where('e.nombre_equipo','LIKE','%'.$query.'%')
          ->orderBy('e.idequipo','e.users_id','desc')
          ->paginate(10);
          return view('equipo.equipo.index',["equipos"=>$equipos,"searchText"=>$query]);
      }
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
    public function depto(){
      $region_id = Input::get('region_id');
      $depto = DB::table('departamento as d')
      ->select('d.iddepartamento','d.depto')
      ->where('d.idregion','=',$region_id)
      ->get();
      return response()->json($depto);
    }
    public function hospital(){
      $depto_id = Input::get('depto_id');
      $hospital = DB::table('departamento as d')
      ->join('hospital as h','h.idhospital','=','d.idhospital')
      ->select('h.idhospital','h.hospital')
      ->where('d.iddepartamento','=',$depto_id)
      ->get();
      return response()->json($hospital);
    }
    public function unidadsalud(){
      $hospital_id = Input::get('hospital_id');
      $unidad = DB::table('unidadsalud as u')
      ->select('u.idunidadsalud','u.unidad_salud')
      ->where('u.idhospital','=',$hospital_id)
      ->get();
      return response()->json($unidad);
    }
    public function tipounidad(){
      $hospital_id = Input::get('hospital_id');
      $tipounidad = DB::table('tipounidadsalud as u')
      ->select('u.idtipounidad','u.unidad_medica')
      ->where('u.idhospital','=',$hospital_id)
      ->get();
      return response()->json($tipounidad);
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
    public function rutina($id)
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
    $equipo=DB::table('equipo')->where('idequipo', $id)->get();
//$view= view("equipo.caracteristica.fichatecnica.show",compact('equipo'));

        $pdf = PDF::loadView("equipo.rutina.rutinamante.show",compact('equipo','proveedor','unidadsalud','area',
                    'estado','serviciotecnico','fabricante','hospital','departamento',
                    'region','grupo','subgrupo','tipounidadsalud'));

        return $pdf->stream('RutinaMantenimiento.pdf');
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
    public function update(EquipoFormRequest $request, $id)
    {
      Equipo::findOrFail($id)->update($request->all());
      return back();
      //return redirect()->route('grupo.index');
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

    public function existente($id)
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


      //$equipo=Equipo::findOrFail($id);
      $equipo=DB::table('equipo as e')
        ->join('subgrupo as s','s.idsubgrupo','=','e.idsubgrupo')
        ->join('conf_corr as c','s.idsubgrupo','=','c.idsubgrupo')
        ->join('hospital as h','h.idhospital','=','e.idhospital')
        ->select('e.*','c.actual as actual','s.codigosubgrupo as codigosubgrupo','h.hospital as hospi',DB::raw('CONCAT(e.idarea,e.idgrupo,s.codigosubgrupo, "-",e.idregion,e.iddepartamento,e.idtipounidad,e.idunidadsalud,c.actual) AS codigo'))
        ->where('e.idequipo','=',$id)
        ->first();
      return view('equipo.existente.index', compact('equipo','proveedor','unidad_salud','area',
                  'estado','servicio_tecnico','fabricante','hospital','departamento',
                  'region','grupo','subgrupo','tipounidadsalud'));

    }



}

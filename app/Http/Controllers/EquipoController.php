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
USE App\valorrefpru;
USE App\ruman;
USE App\DetalleRutinaPrueba;
USE App\DetalleHerramienta;
USE App\Herramienta;
USE App\DetalleInsumoRutina;
USE App\Insumo;
USE App\DetalleRepuestoRutina;
USE App\Repuesto;
USE App\detcaracesp;
USE App\caracespefun;
USE App\valorrefesp;
USE App\TipoManual;
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
      $correlativo = DB::table('conf_corr as c')
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
        $tipomanual=DB::table('tipomanual as ti')
      ->join('detalle_manual as det','det.idtipomanual','ti.idtipomanual')
      ->join('equipo as eq','eq.idequipo','det.idequipo')
      ->where('eq.idequipo', $id)
      ->select('ti.*')
      ->get();
        $manual=DB::table('detalle_manual as ma')
        ->join('equipo as eq','eq.idequipo','ma.idequipo')
      ->where('eq.idequipo', $id)
      ->select('ma.*')
      ->get();
        $repuesto=DB::table('repuesto')
        ->where('idequipo', $id)
        ->select('*')
        ->get();
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
          $detcaracesp=detcaracesp::all();
            $valorrefesp=valorrefesp::all();
              $caracespefun=caracespefun::all();
        $equipo=DB::table('equipo as e')
        ->join('users as user','user.id','e.users_id')
        ->where('idequipo', $id)
        ->select('*')
        ->get();
    //$view= view("equipo.caracteristica.fichatecnica.show",compact('equipo'));

            $pdf = PDF::loadView("equipo.caracteristica.fichatecnica.show",compact('tipomanual','manual','caracespefun','valorrefesp','detcaracesp','repuesto','fabricante','equipo','proveedor','unidadsalud','area',
                        'estado','serviciotecnico','fabricante','hospital','departamento',
                        'region','grupo','subgrupo','tipounidadsalud','detcaractec','CaracTec','subcaractec','valorreftec'));

            return $pdf->stream('FICHA TÉCNICA"'.$id.'".pdf');
            //return view("equipo.caracteristica.fichatecnica.show",compact('equipo'));
    }
    public function rutina($id)
    {
      $equipo=DB::table('equipo as e')
      ->join('subgrupo as s','s.idsubgrupo','=','e.idsubgrupo')
      ->join('users as user','user.id','e.users_id')
      ->select('*',DB::raw('CONCAT(e.idarea,e.idgrupo,s.codigosubgrupo) as inventario '), DB::raw('CONCAT(e.idregion,e.iddepartamento,e.idtipounidad,e.idunidadsalud,e.correlativo) AS codigo'))
      ->where('e.idequipo',$id)
      ->first();
      $preventivo=DB::table('rutina_mantenimiento as rut')
      ->join('tipo_rutina as tipo','tipo.idtipo_rutina','rut.idtipo_rutina')
      ->select('*')
      ->where('rut.estado_rutina','=','REALIZADO')
      ->where('tipo.tipo_rutina','=','PREVENTIVO')
      ->where('rut.idequipo',$id)
      ->get();
      $tecnicos_internos_prev=DB::table('rutina_mantenimiento as rut')
      ->join('tipo_rutina as tipo','tipo.idtipo_rutina','rut.idtipo_rutina')
      ->join('rutina_mantenimiento_tecnico_interno as rti','rti.idrutina_mantenimiento','rut.idrutina_mantenimiento')
      ->join('tecnico_interno as ti','ti.idtecnico','rti.idtecnico')
      ->select('*')
      ->where('rut.estado_rutina','=','REALIZADO')
      ->where('tipo.tipo_rutina','=','PREVENTIVO')
      ->where('rut.idequipo',$id)
      ->get();
      $tecnicos_externos_prev=DB::table('rutina_mantenimiento as rut')
      ->join('tipo_rutina as tipo','tipo.idtipo_rutina','rut.idtipo_rutina')
      ->join('rutina_mantenimiento_tecnico_externo as rte','rte.idrutina_mantenimiento','rut.idrutina_mantenimiento')
      ->join('tecnico_externo as te','te.idtecnico_externo','rte.idtecnico_externo')
      ->select('*')
      ->where('rut.estado_rutina','=','REALIZADO')
      ->where('tipo.tipo_rutina','=','PREVENTIVO')
      ->where('rut.idequipo',$id)
      ->get();

      $correctivo=DB::table('rutina_mantenimiento as rut')
      ->join('tipo_rutina as tipo','tipo.idtipo_rutina','rut.idtipo_rutina')
      ->select('*')
      ->where('rut.estado_rutina','=','REALIZADO')
      ->where('tipo.tipo_rutina','=','CORRECTIVO')
      ->where('rut.idequipo',$id)
      ->get();
      $tecnicos_internos_corr=DB::table('rutina_mantenimiento as rut')
      ->join('rutina_mantenimiento_tecnico_interno as rti','rti.idrutina_mantenimiento','rut.idrutina_mantenimiento')
      ->join('tecnico_interno as ti','ti.idtecnico','rti.idtecnico')
      ->join('tipo_rutina as tipo','tipo.idtipo_rutina','rut.idtipo_rutina')
      ->select('*')
      ->where('rut.estado_rutina','=','REALIZADO')
      ->where('tipo.tipo_rutina','=','CORRECTIVO')
      ->where('rut.idequipo',$id)
      ->get();
      $tecnicos_externos_corr=DB::table('rutina_mantenimiento as rut')
      ->join('tipo_rutina as tipo','tipo.idtipo_rutina','rut.idtipo_rutina')
      ->join('rutina_mantenimiento_tecnico_externo as rte','rte.idrutina_mantenimiento','rut.idrutina_mantenimiento')
      ->join('tecnico_externo as te','te.idtecnico_externo','rte.idtecnico_externo')
      ->select('*')
      ->where('rut.estado_rutina','=','REALIZADO')
      ->where('tipo.tipo_rutina','=','CORRECTIVO')
      ->where('rut.idequipo',$id)
      ->get();





        $pdf = PDF::loadView("equipo.rutina.rutinamante.show",compact('equipo','preventivo',
        'correctivo',
        'tecnicos_internos_prev',
        'tecnicos_externos_prev',
        'tecnicos_internos_corr',
        'tecnicos_externos_corr'));

        return $pdf->stream('Historial.pdf');

    }


    public function HistorialRutina($id)
    {
      $rutinas=DB::table('rutina_mantenimiento as rut')
      ->select('*')
      ->where('rut.idequipo',$id)
      ->get();

      return view('equipo.existente.rutinas', compact('rutinas','id'));
    }






    public function RutinaPdf($id)
    {


      $equipo=DB::table('equipo as e')
      ->join('rutina_mantenimiento as s','s.idequipo','=','e.idequipo')
        ->join('hospital as ho','ho.idhospital','=','e.idhospital')
        ->select('*')
      ->where('s.idrutina_mantenimiento',$id)
      ->first();
      $rutina=DB::table('rutina_mantenimiento as ru')
      ->select('ru.*')
      ->where('ru.idrutina_mantenimiento',$id)
      ->first();
      $rutinaPrueba=DB::table('detalle_rutina_prueba as rupru')
      ->join('valor_ref_prueba as va','va.idvalor_ref_prueba','=','rupru.idvalor_ref_prueba')
      ->join('rutina_mantenimiento as ru','ru.idrutina_mantenimiento','=','rupru.idrutina_mantenimiento')
      ->select('*','va.*')
      ->where('rupru.idrutina_mantenimiento',$id)
      ->get();
      $ruman=DB::table('detalle_caracteristica_rutina as rupru')
      ->join('valor_ref_rutina as va','va.idvalor_ref_rutina','=','rupru.idvalor_ref_rutina')
      ->join('rutina_mantenimiento as ru','ru.idrutina_mantenimiento','=','rupru.idrutina_mantenimiento')
      ->select('*','va.*')
      ->where('rupru.idrutina_mantenimiento',$id)
      ->get();



      $valorPrueba=DB::table('valor_ref_prueba as vapru')
      ->join('detalle_rutina_prueba as s','s.idvalor_ref_prueba','=','vapru.idvalor_ref_prueba')
      ->join('rutina_mantenimiento as ru','ru.idrutina_mantenimiento','=','s.idrutina_mantenimiento')
      ->select('vapru.*')
      ->where('ru.idrutina_mantenimiento',$id)
      ->get();

      $herramienta=DB::table('herramienta as he')
      ->join('detalle_herramienta as de','de.idherramienta','=','he.idherramienta')
      ->join('rutina_mantenimiento as ru','ru.idrutina_mantenimiento','=','de.idrutina_mantenimiento')
      ->select('*')
      ->where('ru.idrutina_mantenimiento',$id)
      ->get();

      $insumo=DB::table('insumo as he')
      ->join('detalle_insumo_rutina as de','de.idinsumo','=','he.idinsumo')
      ->join('rutina_mantenimiento as ru','ru.idrutina_mantenimiento','=','de.idrutina_mantenimiento')
      ->select('*')
      ->where('ru.idrutina_mantenimiento',$id)
      ->get();
      $repuesto=DB::table('repuesto as he')
      ->join('detalle_repuesto_rutina as de','de.idrepuesto','=','he.idrepuesto')
      ->join('rutina_mantenimiento as ru','ru.idrutina_mantenimiento','=','de.idrutina_mantenimiento')
      ->select('*')
      ->where('ru.idrutina_mantenimiento',$id)
      ->get();
      $pdf = PDF::loadView('equipo.existente.RutinaPdf',compact('ruman','repuesto','insumo','herramienta','id','equipo','rutina','rutinaPrueba','valorPrueba'));
      return $pdf->stream('HistorialRutina.pdf');

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
      return back()->with('info','Equipo actualizado correctamente!');
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

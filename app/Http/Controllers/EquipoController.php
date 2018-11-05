<?php

namespace App\Http\Controllers;

use App\Equipo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
//falta el form Request
use App\Http\Requests\EquipoFormRequest;

use Illuminate\Support\Facades\Input;
use App\Accesorio;

use App\Detalle_manual;
use App\Parte;
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
      $partes=DB::table('parte_equipo as pa')
    ->join('equipo as eq','eq.idequipo','pa.idequipo')
    ->where('eq.idequipo', $id)
    ->select('pa.*')
    ->get();

    $accesorio=DB::table('accesorio_equipo as ac')
  ->join('equipo as eq','eq.idequipo','ac.idequipo')
  ->where('eq.idequipo', $id)
  ->select('ac.*')
  ->get();
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

            $pdf = PDF::loadView("equipo.caracteristica.fichatecnica.show",compact('accesorio','partes','tipomanual','manual','caracespefun','valorrefesp','detcaracesp','repuesto','fabricante','equipo','proveedor','unidadsalud','area',
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


    public function HistorialRutina($id,Request $request)
    {
      if ($request)
      {  $query2=trim($request->get('searchTextfecha1'));
        $query3=trim($request->get('searchTextfecha2'));
          $query4=trim($request->get('searchRutina'));
        $query5=trim($request->get('searchEstado'));
            $aceptar=trim($request->get('fechaaceptar'));
          $query=trim($request->get('searchText'));
            $ideq=trim($request->get('idequ'));


          if($aceptar!='aceptar'){
    $rutinas=DB::table('rutina_mantenimiento as f')
    ->join('tipo_rutina as d','f.idtipo_rutina','=','d.idtipo_rutina')
      ->join('notificacion as noti','f.idrutina_mantenimiento','=','noti.rutina_mantenimiento_idrutina_mantenimiento')
   ->join('equipo as e','f.idequipo','=','e.idequipo')



  ->select('noti.*','e.*','f.idrutina_mantenimiento','d.tipo_rutina as idtipo_rutina','f.*')


->where('f.idequipo',$id)

   ->where('f.idtipo_rutina','LIKE','%'.$query4.'%')
   ->where('f.estado_rutina','LIKE','%'.$query5.'%')
//   ->where('noti.start','BETWEEN','>='.$query2.'%')
  ->where('noti.start','>=',$query2)
    //->where('noti.start','<=',$query3)
//    ->where('noti.start','BETWEEN',$query2,'and',$query3)
    ->orderBy('idrutina_mantenimiento','desc')
    ->paginate(10);}else{
      $rutinas=DB::table('rutina_mantenimiento as f')
      ->join('tipo_rutina as d','f.idtipo_rutina','=','d.idtipo_rutina')
        ->join('notificacion as noti','f.idrutina_mantenimiento','=','noti.rutina_mantenimiento_idrutina_mantenimiento')
     ->join('equipo as e','f.idequipo','=','e.idequipo')



    ->select('noti.*','e.*','f.idrutina_mantenimiento','d.tipo_rutina as idtipo_rutina','f.*')

->where('f.idequipo',$id)

     ->where('f.idtipo_rutina','LIKE','%'.$query4.'%')
     ->where('f.estado_rutina','LIKE','%'.$query5.'%')
  //   ->where('noti.start','BETWEEN','>='.$query2.'%')
    ->where('noti.start','>=',$query2)
      ->where('noti.start','<=',$query3)
  //    ->where('noti.start','BETWEEN',$query2,'and',$query3)
      ->orderBy('idrutina_mantenimiento','desc')
      ->paginate(10);




    }
          /*
        $rutinas=DB::table('rutina_mantenimiento as rut')
          ->select('*')
          ->where('rut.idequipo',$id)
            ->where('rut.idequipo','LIKE','%'.$query.'%')
          ->orderBy('rut.idrutina_mantenimiento','desc')
          ->paginate(10);*/
          return view('equipo.existente.rutinas',["rutinas"=>$rutinas,"id"=>$id,"searchText"=>$query,"searchTextfecha1"=>$query2,"searchTextfecha2"=>$query3,"searchRutina"=>$query4,"searchEstado"=>$query5,"fechaaceptar"=>$aceptar]);
      }
      /*
      $rutinas=DB::table('rutina_mantenimiento as rut')
      ->select('*')
      ->where('rut.idequipo',$id)
      ->get();

      return view('equipo.existente.rutinas', compact('rutinas','id'));*/
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
        $partes=DB::table('parte_equipo as part')
        ->join('equipo as eq','eq.idequipo','part.idequipo')
        ->select('*', 'part.descripcion as desc')
        ->where('eq.idequipo',$id)
        ->get();
        $accesorios=DB::table('accesorio_equipo as acc')
        ->join('equipo as eq','eq.idequipo','acc.idequipo')
        ->select('*')
        ->where('eq.idequipo',$id)
        ->get();

        $manuales=DB::table('equipo as e')
        ->join('detalle_manual as dm','dm.idequipo','e.idequipo')
        ->join('tipomanual as tm','tm.idtipomanual','dm.idtipomanual')
        ->select('e.idequipo','tm.nombre_tipo_manual','dm.link_detalle_manual','tm.idtipomanual','dm.observacion_detalle_manual')
        ->where('e.idequipo',$id)
        ->groupBy('e.idequipo','tm.nombre_tipo_manual','dm.link_detalle_manual','tm.idtipomanual','dm.observacion_detalle_manual')
        ->get();
        $nombre=DB::table('equipo')
        ->select('idequipo','nombre_equipo')
        ->where('idequipo',$id)
        ->first();

        $detcaracesp=DB::table('detalle_caracteristica_especial as a')
        ->join('caracteristica_especial_funcionamiento as d','a.idcaracteristica_especial','=','d.idcaracteristica_especial')
        ->join('valor_ref_esp as s','a.idvalor_ref_esp','=','s.idvalor_ref_esp')
        ->join('equipo as e','a.idequipo','=','e.idequipo')
        ->select('*')
        ->where('e.idequipo',$id)
        ->orderBy('d.idcaracteristica_especial','desc')
        ->get();
        $detcaractec=DB::table('detalle_caracteristica_tecnica as d')
        ->join('valor_ref_tec as t','t.idvalor_ref_tec','=','d.idvalor_ref_tec')
        ->join('subgrupo_carac_tecnica as s','s.idsubgrupo_carac_tecnica','=','d.idsubgrupo_carac_tecnica')
        ->join('caracteristica_tecnica as c','c.idcaracteristica_tecnica','=','d.idcaracteristica_tecnica')
        ->join('equipo as e','e.idequipo','=','d.idequipo')
        ->select('d.*','t.*','s.*','c.*','e.*')
        ->where('e.idequipo',$id)
        ->orderBy('c.idcaracteristica_tecnica','desc')
        ->get();
      return view('equipo.existente.index', compact('equipo','proveedor','unidad_salud','area',
                  'estado','servicio_tecnico','fabricante','hospital','departamento',
                  'region','grupo','subgrupo','tipounidadsalud',
                'partes',
                'accesorios',
                'detcaracesp',
                'detcaractec',
                'manuales'));

    }
     public function guardarexistente(Request $request){
       //global id equipo
       $idequipo=$request->get('prueba');
       //datos del equipo
       try{

        DB::beginTransaction();

        Equipo::create($request->all());

        DB::commit();

       }catch(\Exception $e)
       {
           DB::rollback();

       }
       //partes
       try{
           DB::beginTransaction();
         $nombre_parte=$request->get('nombre_parte');
         $num_parte=$request->get('num_parte');
         $descripcion=$request->get('descripcion_parte');


         $cont_parte = 0;

         while($cont_parte < count($num_parte)){
             $detalle_parte = new Parte();
             $detalle_parte->nombre_parte= $nombre_parte[$cont_parte];
             $detalle_parte->num_parte= $num_parte[$cont_parte];
             $detalle_parte->descripcion=$descripcion[$cont_parte];
             $detalle_parte->idequipo=$idequipo;
             $detalle_parte->save();
             $cont_parte=$cont_parte+1;
         }
         DB::commit();
       }catch(\Exception $e)
       {
           DB::rollback();

       }
       //accesorios
       try {
         DB::beginTransaction();
         $nombre_accesorio=$request->get('nombre_accesorio');
         $numero_parte_accesorio=$request->get('numero_parte_accesorio');
         $descripcion_accesorio=$request->get('descripcion_accesorio');


         $cont_acc = 0;

         while($cont_acc < count($numero_parte_accesorio)){
             $detalle_acc = new Accesorio();
             $detalle_acc->nombre_accesorio= $nombre_accesorio[$cont_acc];
             $detalle_acc->numero_parte_accesorio= $numero_parte_accesorio[$cont_acc];
             $detalle_acc->descripcion_accesorio=$descripcion_accesorio[$cont_acc];
             $detalle_acc->idequipo=$idequipo;
             $detalle_acc->save();
             $cont_acc=$cont_acc+1;
         }
         DB::commit();
       } catch (\Exception $e) {
         DB::rollback();
       }
        //caracteristicas tecnicas
       try {
         DB::beginTransaction();
         $idcaracteristica_tecnica = $request->get('idcaracteristica_tecnica');
         $idvalor_ref_tec=$request->get('idvalor_ref_tec');
         $idsubgrupo_carac_tecnica=$request->get('idsubgrupo_carac_tecnica');
         $descripcion_detalle_caracteristica_tecnica=$request->get('descripcion_detalle_caracteristica_tecnica');
         $valor_detalle_caracteristica_tecnica=$request->get('valor_detalle_caracteristica_tecnica');

         $cont_tec = 0;

         while($cont_tec < count($idcaracteristica_tecnica)){
             $detalle_tec = new detcaractec();
             $detalle_tec->idcaracteristica_tecnica= $idcaracteristica_tecnica[$cont_tec];
             $detalle_tec->idequipo= $idequipo;
             $detalle_tec->idvalor_ref_tec=$idvalor_ref_tec[$cont_tec];
             $detalle_tec->idsubgrupo_carac_tecnica=$idsubgrupo_carac_tecnica[$cont_tec];
             $detalle_tec->estado_detalle_caracteristica_tecnica=1;
             $detalle_tec->descripcion_detalle_caracteristica_tecnica=$descripcion_detalle_caracteristica_tecnica[$cont_tec];
             $detalle_tec->valor_detalle_caracteristica_tecnica=$valor_detalle_caracteristica_tecnica[$cont_tec];
             $detalle_tec->save();
             $cont_tec=$cont_tec+1;
         }
         DB::commit();
       } catch (\Exception $e) {
         DB::rollback();
       }
        //caracteristicas especiales
       try {
         DB::beginTransaction();
         $idcaracteristica_especial = $request->get('idcaracteristica_especial');
         $idvalor_ref_esp=$request->get('idvalor_ref_esp');
         $descripcion_detalle_caracteristica_especial=$request->get('descripcion_detalle_caracteristica_especial');
         $valor_detalle_caracteristica_especial=$request->get('valor_detalle_caracteristica_especial');

         $cont_esp = 0;

         while($cont_esp < count($idcaracteristica_especial)){
             $detalle_esp = new detcaracesp();
             $detalle_esp->idcaracteristica_especial= $idcaracteristica_especial[$cont_esp];
             $detalle_esp->idequipo= $idequipo;
             $detalle_esp->idvalor_ref_esp=$idvalor_ref_esp[$cont_esp];
             $detalle_esp->estado_detalle_caracteristica_especial=1;
             $detalle_esp->descripcion_detalle_caracteristica_especial=$descripcion_detalle_caracteristica_especial[$cont_esp];
             $detalle_esp->valor_detalle_caracteristica_especial=$valor_detalle_caracteristica_especial[$cont_esp];
             $detalle_esp->save();
             $cont_esp=$cont_esp+1;
         }
         DB::commit();
       } catch (\Exception $e) {
         DB::rollback();
       }
       //manuales
       try {
         DB::beginTransaction();
         $idtipomanual=$request->get('idtipomanual');
         $link_detalle_manual=$request->get('link_detalle_manual');
         $observacion_detalle_manual=$request->get('observacion_detalle_manual');
         $cont_manual=0;
         while($cont_manual< count($idtipomanual)){
           $manual = new Detalle_manual;
           $manual->idtipomanual=$idtipomanual[$cont_manual];
           $manual->idequipo=$idequipo;
           $manual->link_detalle_manual=$link_detalle_manual[$cont_manual];
           $manual->observacion_detalle_manual=$observacion_detalle_manual[$cont_manual];
           $manual->save();
           $cont_manual=$cont_manual+1;
         }
         DB::commit();
       } catch (\Exception $e) {
         DB::rollback();
       }

       return redirect()->route('equipo.index');
     }


}

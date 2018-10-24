<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\PermisoTrabajoFormRequest;
use App\PermisoTrabajo;
use App\DetalleTipoTrabajoPermiso;
use App\DetalleNaturalezaPeligro;
use App\DetallePrecaucionResponsable;
use App\DetallePrecaucionEjecutante;
use App\Http\Controllers\Controller;
use App\SolicitudTrabajo;
use DB;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Collection;
class PermisoTrabajoController extends Controller
{
  function __construct()
    {
      $this->middleware(['auth','role:admin,jefe-mantto']);
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
           $permisos= DB::table('permiso_trabajo as p')
           ->join('solitud_trabajo as t', 'p.idsolitud_trabajo','=', 't.idsolitud_trabajo')
           ->select('p.idpermiso_trabajo','p.fecha','p.num_permiso','p.descripcion','t.numero as num')
           ->where('num_permiso','LIKE','%'.$query.'%')
           ->orderBy('idpermiso_trabajo','desc')
           ->paginate(10);
           return view('trabajo.permiso.index',["permisos"=>$permisos,"searchText"=>$query]);
       }

     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
     {





$solicitudes=DB::table('solitud_trabajo as so')
            ->join('equipo as e','e.idequipo','=','so.idequipo')
            ->select('so.idsolitud_trabajo', DB::raw('CONCAT(so.numero, " - ", e.nombre_equipo,"->",e.idequipo) as nombre'))
            ->whereNotExists(function ($query) {
  $query->select(DB::raw(1))
                  ->from('permiso_trabajo as pe')
                      ->whereRaw('pe.idsolitud_trabajo= so.idsolitud_trabajo');
            })
            ->get();

     $tipos = DB::table('tipo_trabajo')
                  ->select('idtipo_trabajo','nombre_tipo  AS tipo')
                  ->get();


       $naturalezas = DB::table('naturaleza_peligro')
               ->select('idnaturaleza_peligro','naturaleza_peligro AS naturaleza')
               ->get();


       $responsables = DB::table('precaucion_responsable')
                       ->select('idprecaucion_responsable','precaucion_responsable AS responsable')
                       ->get();
 $ejecutantes = DB::table('precaucion_ejecutante')
                      ->select('idprecaucion_ejecutante','precaucion_ejecutante AS ejecutante')
                      ->get();

     //$numeropermiso = DB::table('permiso_trabajo')->select('num_permiso')->orderBy('num_permiso', 'desc')->first();
    return view("trabajo.permiso.create",["solicitudes"=>$solicitudes,"tipos"=>$tipos,"naturalezas"=>$naturalezas,"responsables"=>$responsables,"ejecutantes"=>$ejecutantes]);
     }
     public function ficha($id)
     {

     $permisos=DB::table('permiso_trabajo as p')
          ->join('solitud_trabajo as s','p.idsolitud_trabajo','=','s.idsolitud_trabajo')
          ->select('p.fecha','p.num_permiso','p.descripcion','s.numero as num')
          ->where('p.idpermiso_trabajo','=',$id)
          ->get();

    $detalles=DB::table('detalle_tipo_trabajo_permiso as d')
               ->join('tipo_trabajo as t','d.idtipo_trabajo','=','t.idtipo_trabajo')
               ->select('t.nombre_tipo as tipo')
               ->where('d.idpermiso_trabajo','=',$id)
               ->get();
   $detallesn=DB::table('detalle_naturaleza_peligro as dn')
               ->join('naturaleza_peligro as n','dn.idnaturaleza_peligro','=','n.idnaturaleza_peligro')
               ->select('n.naturaleza_peligro as naturaleza')
               ->where('dn.idpermiso_trabajo','=',$id)
              ->get();
   $detallesr=DB::table('detalle_precaucion_responsable as dr')
             ->join('precaucion_responsable as r','dr.idprecaucion_responsable','=','r.idprecaucion_responsable')
             ->select('r.precaucion_responsable as responsable')
             ->where('dr.idpermiso_trabajo','=',$id)
              ->get();

   $detallese=DB::table('detalle_precaucion_ejecutante as de')
             ->join('precaucion_ejecutante as e','de.idprecaucion_ejecutante','=','e.idprecaucion_ejecutante')
             ->select('e.precaucion_ejecutante as ejecutante')
             ->where('de.idpermiso_trabajo','=',$id)
             ->get();


         $pdf = PDF::loadView("trabajo.permisopdf.show",["permisos"=>$permisos,"detalles"=>$detalles,"detallesn"=>$detallesn,"detallesr"=>$detallesr,"detallese"=>$detallese]);

         return $pdf->stream('PermisoTrabajo.pdf');

     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(PermisoTrabajoFormRequest $request)
     {
       try{
            DB::beginTransaction();
              $permisos=new PermisoTrabajo;
              $mytime = Carbon::now('America/Guatemala');
              $permisos->fecha=$mytime->toDateString();
              ;

              $permisos->num_permiso=$request->get('num_permiso');
              $permisos->descripcion=$request->get('descripcion');
              $permisos->idsolitud_trabajo=$request->get('idsolitud_trabajo');
              $permisos->save();


              $idtipo_trabajo = $request->get('idtipo_trabajo');

              $descripcion_detalle_tipo_trabajo_permiso	 = $request->get('descripcion_detalle_tipo_trabajo_permiso');

              $cont = 0;

              while($cont <count($idtipo_trabajo)){
                  $detalle = new DetalleTipoTrabajoPermiso();
                  $detalle->idpermiso_trabajo = $permisos->idpermiso_trabajo;
                  $detalle->idtipo_trabajo= $idtipo_trabajo[$cont];
                  $detalle->estado_detalle_tipo_trabajo_permiso= 1;
                  $detalle->descripcion_detalle_tipo_trabajo_permiso= $descripcion_detalle_tipo_trabajo_permiso[$cont];
                  $detalle->save();
                  $cont=$cont+1;
              }


              $idnaturaleza_peligro = $request->get('idnaturaleza_peligro');

              $contn = 0;

              while($contn <count($idnaturaleza_peligro)){
                  $detallen = new DetalleNaturalezaPeligro();
                  $detallen->idpermiso_trabajo = $permisos->idpermiso_trabajo;
                  $detallen->idnaturaleza_peligro= $idnaturaleza_peligro[$contn];
                  $detallen->estado_detalle_naturaleza_peligro = 1;
                  $detallen->save();
                  $contn=$contn+1;
              }


              $idprecaucion_responsable= $request->get('idprecaucion_responsable');


              $contr = 0;

              while($contr <count($idprecaucion_responsable)){
                  $detaller = new DetallePrecaucionResponsable();
                  $detaller->idpermiso_trabajo = $permisos->idpermiso_trabajo;
                  $detaller->idprecaucion_responsable= $idprecaucion_responsable[$contr];
                  $detaller->estado_detalle_precaucion_responsable	= 1;
                  $detaller->save();
                  $contr=$contr+1;
                }

                $idprecaucion_ejecutante= $request->get('idprecaucion_ejecutante');


                $contj = 0;

                while($contj <count($idprecaucion_ejecutante)){
                    $detallej = new DetallePrecaucionEjecutante();
                    $detallej->idpermiso_trabajo = $permisos->idpermiso_trabajo;
                    $detallej->idprecaucion_ejecutante= $idprecaucion_ejecutante[$contj];
                    $detallej->estado_detalle_precaucion_ejecutante	= 1;
                    $detallej->save();
                    $contj=$contj+1;
                  }

              DB::commit();

            }catch(\Exception $e)
            {
                DB::rollback();
            }

            return Redirect::to('trabajo/permiso');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\PermisoTrabajo  $permisoTrabajo
     * @return \Illuminate\Http\Response
     */
     public function show($id)
     {
       $permisos=DB::table('permiso_trabajo as p')
             ->join('solitud_trabajo as so','p.idsolitud_trabajo','=','so.idsolitud_trabajo')
             ->select('p.idpermiso_trabajo','p.fecha','p.num_permiso','p.descripcion','so.numero as num')
             ->where('p.idpermiso_trabajo','=',$id)
             ->first();
      $detallep=DB::table('detalle_tipo_trabajo_permiso as d')
                  ->join('tipo_trabajo as t','d.idtipo_trabajo','=','t.idtipo_trabajo')
                  ->select('t.nombre_tipo as tipo','d.descripcion_detalle_tipo_trabajo_permiso')
                  ->where('d.idpermiso_trabajo','=',$id)
                  ->get();
      $detallesn=DB::table('detalle_naturaleza_peligro as dn')
                 ->join('naturaleza_peligro as n','dn.idnaturaleza_peligro','=','n.idnaturaleza_peligro')
                 ->select('n.naturaleza_peligro as naturaleza')
                 ->where('dn.idpermiso_trabajo','=',$id)
                ->get();
     $detallesr=DB::table('detalle_precaucion_responsable as dr')
                ->join('precaucion_responsable as r','dr.idprecaucion_responsable','=','r.idprecaucion_responsable')
                ->select('r.precaucion_responsable as responsable')
                ->where('dr.idpermiso_trabajo','=',$id)
                ->get();
    $detallese=DB::table('detalle_precaucion_ejecutante as de')
                ->join('precaucion_ejecutante as e','de.idprecaucion_ejecutante','=','e.idprecaucion_ejecutante')
                ->select('e.precaucion_ejecutante as ejecutante')
                 ->where('de.idpermiso_trabajo','=',$id)
               ->get();

               return view("trabajo.permiso.show",["permisos"=>$permisos,"detallep"=>$detallep,"detallesn"=>$detallesn,"detallesr"=>$detallesr,"detallese"=>$detallese]);

     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PermisoTrabajo  $permisoTrabajo
     * @return \Illuminate\Http\Response
     */
     public function edit($id)
     {
       $solicitudes=SolicitudTrabajo::all();
       $permisos=PermisoTrabajo::findOrFail($id);
       return view('trabajo.permiso.edit', compact('permisos'),compact('solicitudes'));
     }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PermisoTrabajo  $permisoTrabajo
     * @return \Illuminate\Http\Response
     */
     public function update(PermisoTrabajoFormRequest $request, $id)
     {
       PermisoTrabajo::findOrFail($id)->update($request->all());
       return redirect()->route('permiso.index');
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PermisoTrabajo  $permisoTrabajo
     * @return \Illuminate\Http\Response
     */
     public function destroy($id)
     {
         //
         PermisoTrabajo::findOrFail($id)->delete();
         return redirect()->route('permiso.index');
     }
}

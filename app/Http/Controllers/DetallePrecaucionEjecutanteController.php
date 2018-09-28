<?php

namespace App\Http\Controllers;

use App\DetallePrecaucionEjecutante;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PrecaucionEjecutante;
use App\PermisoTrabajo;
use App\Http\Requests\DetallePrecaucionEjecutanteFormRequest;
use DB;
class DetallePrecaucionEjecutanteController extends Controller
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
           $ejecutantes=DB::table('detalle_precaucion_ejecutante as d')
           ->join('precaucion_ejecutante as r','d.idprecaucion_ejecutante','=', 'r.idprecaucion_ejecutante')
           ->join('permiso_trabajo as p','d.idpermiso_trabajo','=', 'p.idpermiso_trabajo')
           ->select('d.iddetalle_precaucion_ejecutante','r.precaucion_ejecutante as pre','p.num_permiso as nu','d.estado_detalle_precaucion_ejecutante')
           ->where('r.precaucion_ejecutante','LIKE','%'.$query.'%')
           ->orderBy('iddetalle_precaucion_ejecutante','desc')
           ->paginate(10);

          return view('detalles.detalleejecutante.index', ["ejecutantes"=>$ejecutantes,"searchText"=>$query]);
       }



       }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
     {

         $precauciones=PrecaucionEjecutante::all();
         $permisos=PermisoTrabajo::all();
  return view('detalles.detalleejecutante.create', compact('precauciones','permisos'));
     }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(DetallePrecaucionEjecutanteFormRequest $request)
     {

       DetallePrecaucionEjecutante::create($request->all());
       return redirect()->route('detalleejecutante.index');
     }

    /**
     * Display the specified resource.
     *
     * @param  \App\DetallePrecaucionEjecutante  $detallePrecaucionEjecutante
     * @return \Illuminate\Http\Response
     */
     public function show($id)
     {
       $precauciones=PrecaucionEjecutante::all();
       $permisos=PermisoTrabajo::all();
       $ejecutantes=DetallePrecaucionEjecutante::findOrFail($id);
         return view('detalles.detalleejecutante.show', compact('ejecutantes'),compact('precauciones','permisos'));
     }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DetallePrecaucionEjecutante  $detallePrecaucionEjecutante
     * @return \Illuminate\Http\Response
     */
     public function edit($id)
     {
       $precauciones=PrecaucionEjecutante::all();
       $permisos=PermisoTrabajo::all();
       $ejecutantes=DetallePrecaucionEjecutante::findOrFail($id);
       return view('detalles.detalleejecutante.edit', compact('ejecutantes'),compact('precauciones','permisos'));
     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DetallePrecaucionEjecutante  $detallePrecaucionEjecutante
     * @return \Illuminate\Http\Response
     */
     public function update(DetallePrecaucionEjecutanteFormRequest $request, $id)
     {
      DetallePrecaucionEjecutante::findOrFail($id)->update($request->all());
       return redirect()->route('detalleejecutante.index');
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DetallePrecaucionEjecutante  $detallePrecaucionEjecutante
     * @return \Illuminate\Http\Response
     */
     public function destroy( $id)
     {
        DetallePrecaucionEjecutante::findOrFail($id)->delete();
       return redirect()->route('detalleejecutante.index');
     }
}

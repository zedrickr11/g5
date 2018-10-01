<?php

namespace App\Http\Controllers;

use App\DetallePrecaucionResponsable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PrecaucionResponsable;
use App\PermisoTrabajo;
use App\Http\Requests\DetallePrecaucionResponsableFormRequest;
use DB;
class DetallePrecaucionResponsableController extends Controller
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
           $responsables=DB::table('detalle_precaucion_responsable as d')
           ->join('precaucion_responsable as r','d.idprecaucion_responsable','=', 'r.idprecaucion_responsable')
           ->join('permiso_trabajo as p','d.idpermiso_trabajo','=', 'p.idpermiso_trabajo')
           ->select('d.iddetalle_precaucion_responsable','r.precaucion_responsable as pre','p.num_permiso as nu','d.estado_detalle_precaucion_responsable')
           ->where('r.precaucion_responsable','LIKE','%'.$query.'%')
           ->orderBy('iddetalle_precaucion_responsable','desc')
           ->paginate(10);

          return view('detalles.detalleresponsable.index', ["responsables"=>$responsables,"searchText"=>$query]);
       }



       }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
     {

         $precauciones=PrecaucionResponsable::all();
         $permisos=PermisoTrabajo::all();
  return view('detalles.detalleresponsable.create', compact('precauciones','permisos'));
     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(DetallePrecaucionResponsableFormRequest $request)
     {

       DetallePrecaucionResponsable::create($request->all());
       return redirect()->route('detalleresponsable.index');
     }

    /**
     * Display the specified resource.
     *
     * @param  \App\DetallePrecaucionResponsable  $detallePrecaucionResponsable
     * @return \Illuminate\Http\Response
     */
     public function show($id)
     {
       $precauciones=PrecaucionResponsable::all();
       $permisos=PermisoTrabajo::all();
       $responsables=DetallePrecaucionResponsable::findOrFail($id);
         return view('detalles.detalleresponsable.show', compact('responsables'),compact('precauciones','permisos'));
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DetallePrecaucionResponsable  $detallePrecaucionResponsable
     * @return \Illuminate\Http\Response
     */
     public function edit($id)
     {
       $precauciones=PrecaucionResponsable::all();
       $permisos=PermisoTrabajo::all();
       $responsables=DetallePrecaucionResponsable::findOrFail($id);
       return view('detalles.detalleresponsable.edit', compact('responsables'),compact('precauciones','permisos'));
     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DetallePrecaucionResponsable  $detallePrecaucionResponsable
     * @return \Illuminate\Http\Response
     */
     public function update(DetallePrecaucionResponsableFormRequest $request, $id)
     {
      DetallePrecaucionResponsable::findOrFail($id)->update($request->all());
       return redirect()->route('detalleresponsable.index');
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DetallePrecaucionResponsable  $detallePrecaucionResponsable
     * @return \Illuminate\Http\Response
     */
     public function destroy( $id)
     {
        DetallePrecaucionResponsable::findOrFail($id)->delete();
       return redirect()->route('detalleresponsable.index');
     }
}

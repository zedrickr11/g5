<?php

namespace App\Http\Controllers;

use App\DetalleNaturalezaPeligro;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\NaturalezaPeligro;
use App\PermisoTrabajo;
use App\Http\Requests\DetalleNaturalezaPeligroFormRequest;
use DB;
class DetalleNaturalezaPeligroController extends Controller
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
           $detallenaturalezas=DB::table('detalle_naturaleza_peligro as d')
           ->join('naturaleza_peligro as n','d.idnaturaleza_peligro','=', 'n.idnaturaleza_peligro')
           ->join('permiso_trabajo as p','d.idpermiso_trabajo','=', 'p.idpermiso_trabajo')
           ->select('d.iddetalle_naturaleza_peligro','n.naturaleza_peligro as na','p.num_permiso as nu','d.estado_detalle_naturaleza_peligro')
           ->where('n.naturaleza_peligro','LIKE','%'.$query.'%')
           ->orderBy('iddetalle_naturaleza_peligro','desc')
           ->paginate(10);

     return view('detalles.detallenaturaleza.index', ["detallenaturalezas"=>$detallenaturalezas,"searchText"=>$query]);
       }



       }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
     {
         $naturalezas=NaturalezaPeligro::all();
         $permisos=PermisoTrabajo::all();
         return view("detalles.detallenaturaleza.create",compact('naturalezas','permisos'));
     }

     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
     public function store(DetalleNaturalezaPeligroFormRequest $request)
     {

       DetalleNaturalezaPeligro::create($request->all());
       return redirect()->route('detallenaturaleza.index');
     }

    /**
     * Display the specified resource.
     *
     * @param  \App\DetalleNaturalezaPeligro  $detalleNaturalezaPeligro
     * @return \Illuminate\Http\Response
     */
     public function show($id)
     {
       $naturalezas=NaturalezaPeligro::all();
       $permisos=PermisoTrabajo::all();
       $detallenaturalezas=DetalleNaturalezaPeligro::findOrFail($id);
       return view('detalles.detallenaturaleza.show', compact('detallenaturalezas'), compact('naturalezas','permisos'));
     }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DetalleNaturalezaPeligro  $detalleNaturalezaPeligro
     * @return \Illuminate\Http\Response
     */
     public function edit($id)
     {
       $naturalezas=NaturalezaPeligro::all();
       $permisos=PermisoTrabajo::all();
       $detallenaturalezas=DetalleNaturalezaPeligro::findOrFail($id);
       return view('detalles.detallenaturaleza.edit', compact('detallenaturalezas'),compact('naturalezas','permisos'));
     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DetalleNaturalezaPeligro  $detalleNaturalezaPeligro
     * @return \Illuminate\Http\Response
     */
     public function update(DetalleNaturalezaPeligroFormRequest $request, $id)
     {
      DetalleNaturalezaPeligro::findOrFail($id)->update($request->all());
       return redirect()->route('detallenaturaleza.index');
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DetalleNaturalezaPeligro  $detalleNaturalezaPeligro
     * @return \Illuminate\Http\Response
     */
     public function destroy( $id)
     {
        DetalleNaturalezaPeligro::findOrFail($id)->delete();
       return redirect()->route('detallenaturaleza.index');
     }
}

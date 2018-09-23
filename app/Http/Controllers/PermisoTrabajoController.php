<?php

namespace App\Http\Controllers;

use App\PermisoTrabajo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PermisoTrabajoFormRequest;
use App\SolicitudTrabajo;
use DB;
class PermisoTrabajoController extends Controller
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
           $permisos= DB::table('permiso_trabajo as p')
           ->join('solitud_trabajo as t', 'p.solitud_trabajo_idsolitud_trabajo','=', 't.idsolitud_trabajo')
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
       $solicitudes=SolicitudTrabajo::all();
         return view("trabajo.permiso.create",compact('solicitudes'));
     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(PermisoTrabajoFormRequest $request)
     {
       PermisoTrabajo::create($request->all());
       return redirect()->route('permiso.index');
     }

    /**
     * Display the specified resource.
     *
     * @param  \App\PermisoTrabajo  $permisoTrabajo
     * @return \Illuminate\Http\Response
     */
     public function show($id)
     {
       $solicitudes=SolicitudTrabajo::all();
       $permisos=PermisoTrabajo::findOrFail($id);
       return view('trabajo.permiso.show', compact('permisos'), compact('solicitudes'));
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

<?php

namespace App\Http\Controllers;

use App\DetalleTipoTrabajoPermiso;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PermisoTrabajo;
use App\TipoTrabajo;
use App\Http\Requests\DetalleTipoTrabajoPermisoFormRequest;
use DB;
class DetalleTipoTrabajoPermisoController extends Controller
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
           $detpermisos=DB::table('detalle_tipo_trabajo_permiso as d')
           ->join('permiso_trabajo as p','d.idpermiso_trabajo','=', 'p.idpermiso_trabajo')
           ->join('tipo_trabajo as t','d.tipo_trabajo_idtipo_trabajo','=', 't.idtipo_trabajo')
           ->select('d.iddetalle_tipo_trabajo_permiso','p.num_permiso as nu','t.nombre_tipo as no','d.descripcion_detalle_tipo_trabajo_permiso','d.estado_detalle_tipo_trabajo_permiso')
           ->where('p.num_permiso','LIKE','%'.$query.'%')
           ->orderBy('iddetalle_tipo_trabajo_permiso','desc')
           ->paginate(10);
            return view('detalles.detalletipotrabajo.index', ["detpermisos"=> $detpermisos,"searchText"=>$query]);
       }
       }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
     {
       $permisos=PermisoTrabajo::all();
       $tipos=TipoTrabajo::all();
         return view("detalles.detalletipotrabajo.create",compact('permisos','tipos'));
     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(DetalleTipoTrabajoPermisoFormRequest $request)
     {

       DetalleTipoTrabajoPermiso::create($request->all());
       return redirect()->route('detalletipotrabajo.index');
     }

    /**
     * Display the specified resource.
     *
     * @param  \App\DetalleTipoTrabajoPermiso  $detalleTipoTrabajoPermiso
     * @return \Illuminate\Http\Response
     */
     public function show($id)
     {
       $permisos=PermisoTrabajo::all();
       $tipos=TipoTrabajo::all();
       $detpermisos=DetalleTipoTrabajoPermiso::findOrFail($id);
       return view('detalles.detalletipotrabajo.show', compact('detpermisos'), compact('permisos','tipos'));
     }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DetalleTipoTrabajoPermiso  $detalleTipoTrabajoPermiso
     * @return \Illuminate\Http\Response
     */
     public function edit($id)
     {
       $permisos=PermisoTrabajo::all();
       $tipos=TipoTrabajo::all();
       $detpermisos=DetalleTipoTrabajoPermiso::findOrFail($id);
         return view('detalles.detalletipotrabajo.edit', compact('detpermisos'), compact('permisos','tipos'));
     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DetalleTipoTrabajoPermiso  $detalleTipoTrabajoPermiso
     * @return \Illuminate\Http\Response
     */
     public function update(DetalleTipoTrabajoPermisoFormRequest $request, $id)
     {
      DetalleTipoTrabajoPermiso::findOrFail($id)->update($request->all());
       return redirect()->route('detalletipotrabajo.index');
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DetalleTipoTrabajoPermiso  $detalleTipoTrabajoPermiso
     * @return \Illuminate\Http\Response
     */
     public function destroy( $id)
     {
        DetalleTipoTrabajoPermiso::findOrFail($id)->delete();
       return redirect()->route('detalletipotrabajo.index');
     }
}

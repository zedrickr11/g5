<?php

namespace App\Http\Controllers;

use App\Equipo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Estado;
use App\ServicioTecnico;
use App\Fabricante;
use App\Proveedor;
use App\UnidadSalud;
use App\Area;
use DB;


class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD

      $equipo= DB::table('equipo as e')
      ->join('estado_equipo as h','h.idestado','=','e.estado_equipo_idestado')
      ->select('e.idequipo','e.correlativo','e.nombre_equipo','e.marca','e.modelo','e.serie','h.estado as estado_equipo_idestado')
      ->get();
    return view('equipo.equipo.index', compact('equipo'));
=======
        return view('equipo.equipo.index');
>>>>>>> facec7b23a2faf9c0fe032df88b5dfee46326619
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $estado_equipo=Estado::all();
        $servicio_tecnico=ServicioTecnico::all();
          $fabricante=Fabricante::all();
            $proveedor=Proveedor::all();
              $unidad_salud=UnidadSalud::all();
                $area=Area::all();
        return view("equipo.equipo.create",compact('estado_equipo','servicio_tecnico','fabricante','proveedor','unidad_salud','area'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
    public function show(Equipo $equipo)
    {
        //
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

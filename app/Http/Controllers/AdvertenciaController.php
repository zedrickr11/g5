<?php

namespace App\Http\Controllers;

use App\Advertencia;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Equipo;
class AdvertenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $advertencis= DB::table('advertencia as a')
      ->join('equipo as e', 'a.equipo_idequipo','=', 'e.idequipo')
      ->select('a.idadvertencia','a.nombre_advertencia','a.valor_advertencia','e.nombre_equipo as equi')
      ->get();
      return view('equipo.advertencia.index', compact('advertencis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $equipos=Equipo::all();
        return view("equipo.advertencia.create",compact('equipos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Advertencia::create($request->all());
      return redirect()->route('advertencia.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Advertencia  $advertencia
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $equipos=Equipo::all();
      $advertencis=Advertencia::findOrFail($id);
      return view('equipo.advertencia.show', compact('advertencis'), compact('equipos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Advertencia  $advertencia
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $equipos=Equipo::all();
      $advertencis=Advertencia::findOrFail($id);
      return view('equipo.advertencia.edit', compact('advertencis'),compact('equipos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Advertencia  $advertencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      Advertencia::findOrFail($id)->update($request->all());
      return redirect()->route('advertencia.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Advertencia  $advertencia
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Advertencia::findOrFail($id)->delete();
        return redirect()->route('advertencia.index');
    }
}

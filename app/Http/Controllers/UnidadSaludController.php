<?php

namespace App\Http\Controllers;

use App\UnidadSalud;
use App\Hospital;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class UnidadSaludController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    /*  $unidades=UnidadSalud::all();
    return view('hospital.unidad.index', compact('unidades'));
*/

    $unidades= DB::table('unidadsalud as u')
    ->join('hospital as h', 'u.idhospital','=', 'h.idhospital')
    ->select('u.idunidadsalud','u.unidad_salud','h.hospital as hospi')
    ->get();
    return view('hospital.unidad.index', compact('unidades'));

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $hospitals=Hospital::all();
        return view("hospital.unidad.create",compact('hospitals'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      UnidadSalud::create($request->all());
      return redirect()->route('unidad.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UnidadSalud  $unidadSalud
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $hospitals=Hospital::all();
      $unidades=UnidadSalud::findOrFail($id);
      return view('hospital.unidad.show', compact('unidades'), compact('hospitals'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UnidadSalud  $unidadSalud
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $hospitals=Hospital::all();
      $unidades=UnidadSalud::findOrFail($id);
      return view('hospital.unidad.edit', compact('unidades'),compact('hospitals'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UnidadSalud  $unidadSalud
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      UnidadSalud::findOrFail($id)->update($request->all());
      return redirect()->route('unidad.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UnidadSalud  $unidadSalud
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      UnidadSalud::findOrFail($id)->delete();
      return redirect()->route('unidad.index');
    }
}

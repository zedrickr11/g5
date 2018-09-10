<?php

namespace App\Http\Controllers;

use App\TipoUnidadSalud;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Hospital;
class TipoUnidadSaludController extends Controller
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
        $tipos= DB::table('tipounidadsalud as u')
            ->select('*')
            ->where('unidad_medica','LIKE','%'.$query.'%')
            ->orderBy('idtipounidad','desc')
            ->join('hospital as h', 'u.idhospital','=', 'h.idhospital')
            ->select('u.idtipounidad','u.nivel_atencion','u.categoria','u.comp_res','u.unidad_medica','h.hospital as hospi')
            ->get();
    return view('hospital.tipounidad.index', ["tipos"=>$tipos,"searchText"=>$query]);
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $hospitals=Hospital::all();
          return view("hospital.tipounidad.create",compact('hospitals'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        TipoUnidadSalud::create($request->all());
        return redirect()->route('tipounidad.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TipoUnidadSalud  $tipoUnidadSalud
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $hospitals=Hospital::all();
      $tipos=TipoUnidadSalud::findOrFail($id);
      return view('hospital.tipounidad.show', compact('tipos'), compact('hospitals'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TipoUnidadSalud  $tipoUnidadSalud
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $hospitals=Hospital::all();
      $tipos=TipoUnidadSalud::findOrFail($id);
      return view('hospital.tipounidad.edit', compact('tipos'),compact('hospitals'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TipoUnidadSalud  $tipoUnidadSalud
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        TipoUnidadSalud::findOrFail($id)->update($request->all());
        return redirect()->route('tipounidad.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TipoUnidadSalud  $tipoUnidadSalud
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        TipoUnidadSalud::findOrFail($id)->delete();
        return redirect()->route('tipounidad.index');
    }
}

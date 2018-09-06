<?php

namespace App\Http\Controllers;

use App\detcaractec;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\CaracTec;
use App\subcaractec;
use App\valorreftec;

class detcaractecController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
//  $detcaractec=detcaractec::all();

    $detcaractec=DB::table('detalle_caracteristica_tecnica as a')
    ->join('caracteristica_tecnica as d','a.idcaracteristica_tecnica','=','d.idcaracteristica_tecnica')
      ->join('subgrupo_carac_tecnica as s','a.idsubgrupo_carac_tecnica','=','s.idsubgrupo_carac_tecnica')
      ->join('valor_ref_tec as v','a.idvalor_ref_tec','=','v.idvalor_ref_tec')
        ->join('equipo as e','a.idequipo','=','e.idequipo')

    ->select('d.nombre_caracteristica_tecnica as idcaracteristica_tecnica','e.nombre_equipo as idequipo','v.nombre_valor_ref_tec as idvalor_ref_tec','s.nombre_subgrupo_carac_tecnica as idsubgrupo_carac_tecnica','a.estado_detalle_caracteristica_tecnica','descripcion_detalle_caracteristica_tecnica','valor_detalle_caracteristica_tecnica')
    ->get();



    return view('equipo.caracteristica.detcaractec.index', compact('detcaractec'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
        $caract_tec=CaracTec::all();
        $subcaractec=subcaractec::all();
          $valorreftec=valorreftec::all();
        return view("equipo.caracteristica.detcaractec.create",compact('caract_tec','subcaractec','valorreftec'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {  detcaractec::create($request->all());
    return redirect()->route('detcaractec.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\detcaractec  $detcaractec
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {  $detcaractec=detcaractec::findOrFail($id);




    return view('equipo.caracteristica.detcaractec.show', compact('detcaractec'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\detcaractec  $detcaractec
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
  $detcaractec=detcaractec::findOrFail($id);
    return view('equipo.caracteristica.detcaractec.edit', compact('detcaractec'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\detcaractec  $detcaractec
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    detcaractec::findOrFail($id)->update($request->all());
    return redirect()->route('detcaractec.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\detcaractec  $detcaractec
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {detcaractec::findOrFail($id)->delete();
  return redirect()->route('detcaractec.index');
  }
}

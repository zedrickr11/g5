<?php

namespace App\Http\Controllers;

use App\detcaracru;
use Illuminate\Http\Request;
use DB;
use App\caracru;
use App\subru;
use App\valrefru;
use App\ruman;

class detcaracruController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(Request $request)
  {
//  $detcaractec=detcaractec::all();

if ($request)
{
    $query=trim($request->get('searchText'));
  $detcaracru=DB::table('detalle_caracteristica_rutina as a')
  ->join('caracteristica_rutina as d','a.idcaracteristica_rutina','=','d.idcaracteristica_rutina')
    ->join('subgrupo_rutina as s','a.idsubgrupo_rutina','=','s.idsubgrupo_rutina')
    ->join('valor_ref_rutina as v','a.idvalor_ref_rutina','=','v.idvalor_ref_rutina')
      ->join('rutina_mantenimiento as e','a.idrutina_mantenimiento','=','e.idrutina_mantenimiento')

  ->select('iddetalle_caracteristica_rutina','d.caracteristica_rutina as idcaracteristica_rutina','s.subgrupo_rutina as idsubgrupo_rutina','v.descripcion as idvalor_ref_rutina','e.idrutina_mantenimiento','estado_detalle_caracteristica_rutina','fecha_detalle_caracteristica_rutina','comentario_detalle_caracteristica_rutina')

  //  ->select('*')
    ->where('d.caracteristica_rutina','LIKE','%'.$query.'%')
    ->orderBy('d.idcaracteristica_rutina','desc')
    ->paginate(10);

    return view('equipo.rutina.detcaracru.index',["detcaracru"=>$detcaracru,"searchText"=>$query]);
}

    //$detcaractec=DB::table('detalle_caracteristica_tecnica as a')
  //  ->join('caracteristica_tecnica as d','a.idcaracteristica_tecnica','=','d.idcaracteristica_tecnica')
    //  ->join('subgrupo_carac_tecnica as s','a.idsubgrupo_carac_tecnica','=','s.idsubgrupo_carac_tecnica')
    //  ->join('valor_ref_tec as v','a.idvalor_ref_tec','=','v.idvalor_ref_tec')
    //    ->join('equipo as e','a.idequipo','=','e.idequipo')

  //  ->select('d.nombre_caracteristica_tecnica as idcaracteristica_tecnica','e.nombre_equipo as idequipo','v.nombre_valor_ref_tec as idvalor_ref_tec','s.nombre_subgrupo_carac_tecnica as idsubgrupo_carac_tecnica','a.estado_detalle_caracteristica_tecnica','descripcion_detalle_caracteristica_tecnica','valor_detalle_caracteristica_tecnica')
    //->get();



  //  return view('equipo.caracteristica.detcaractec.index', compact('detcaractec'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
        $caracru=caracru::all();
        $subru=subru::all();
          $valrefru=valrefru::all();
            $ruman=ruman::all();
        return view("equipo.rutina.detcaracru.create",compact('caracru','subru','valrefru','ruman'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {  detcaracru::create($request->all());
    return redirect()->route('detcaracru.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\detcaracru  $detcaractec
   * @return \Illuminate\Http\Response
   */
  public function show($id)

  {  $detcaracru=detcaracru::findOrFail($id);
    $caracru=caracru::all();
    $subru=subru::all();
      $valrefru=valrefru::all();
        $ruman=ruman::all();



    return view('equipo.rutina.detcaracru.show', compact('detcaracru','caracru','subru','valrefru','ruman'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\detcaracru  $detcaractec
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $caracru=caracru::all();
    $subru=subru::all();
      $valrefru=valrefru::all();
        $ruman=ruman::all();
  $detcaracru=detcaracru::findOrFail($id);
    return view('equipo.rutina.detcaracru.edit', compact('detcaracru','caracru','subru','valrefru','ruman'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\detcaracru  $detcaractec
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    detcaracru::findOrFail($id)->update($request->all());
    return redirect()->route('detcaracru.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\detcaracru  $detcaractec
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {detcaracru::findOrFail($id)->delete();
  return redirect()->route('detcaracru.index');
  }
}

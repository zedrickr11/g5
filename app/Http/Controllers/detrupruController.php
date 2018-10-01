<?php

namespace App\Http\Controllers;

use App\detrupru;
use Illuminate\Http\Request;
use DB;
use App\ruman;
use App\pruru;
use App\valrefpru;
use App\subpru;

class detrupruController extends Controller
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
  $detrupru=DB::table('detalle_rutina_prueba as a')
  ->join('prueba_rutina as d','a.idprueba_rutina','=','d.idprueba_rutina')
    ->join('subgrupo_prueba as s','a.idsubgrupo_prueba','=','s.idsubgrupo_prueba')
    ->join('valor_ref_prueba as v','a.idvalor_ref_prueba','=','v.idvalor_ref_prueba')
      ->join('rutina_mantenimiento as e','a.idrutina_mantenimiento','=','e.idrutina_mantenimiento')

  ->select('iddetalle_rutina_prueba','e.idrutina_mantenimiento','d.prueba_rutina as idprueba_rutina','s.idsubgrupo_prueba as idsubgrupo_prueba','v.descripcion as idvalor_ref_prueba','norma_detalle_rutina_prueba','unidad_medida_detalle_rutina_prueba','estado_detalle_rutina_prueba','fecha_detalle_rutina_prueba','comentario_detalle_rutina_prueba')

  //  ->select('*')
    ->where('e.idrutina_mantenimiento','LIKE','%'.$query.'%')
    ->orderBy('e.idrutina_mantenimiento','desc')
    ->paginate(10);

    return view('equipo.rutina.detrupru.index',["detrupru"=>$detrupru,"searchText"=>$query]);
}

  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
        $pruru=pruru::all();
        $valorrefpru=valrefpru::all();
          $subpru=subpru::all();
            $ruman=ruman::all();
        return view("equipo.rutina.detrupru.create",compact('pruru','valorrefpru','subpru','ruman'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {  detrupru::create($request->all());
    return redirect()->route('detrupru.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\detrupru  $detcaractec
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {  $detrupru=detrupru::findOrFail($id);

    $pruru=pruru::all();
    $valorrefpru=valrefpru::all();
      $subpru=subpru::all();
        $ruman=ruman::all();


    return view('equipo.rutina.detrupru.show', compact('detrupru','pruru','valorrefpru','subpru','ruman'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\detrupru  $detcaractec
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $pruru=pruru::all();
    $valorrefpru=valrefpru::all();
      $subpru=subpru::all();
        $ruman=ruman::all();
  $detrupru=detrupru::findOrFail($id);
    return view('equipo.rutina.detrupru.edit', compact('detrupru','pruru','valorrefpru','subpru','ruman'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\detrupru  $detcaractec
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    detrupru::findOrFail($id)->update($request->all());
    return redirect()->route('detrupru.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\detrupru  $detcaractec
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {detrupru::findOrFail($id)->delete();
  return redirect()->route('detrupru.index');
  }
}

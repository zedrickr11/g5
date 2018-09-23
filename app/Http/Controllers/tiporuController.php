<?php

namespace App\Http\Controllers;

use App\tiporu;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests\tiporuFormRequest;

class tiporuController extends Controller
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
        $tiporu=DB::table('tipo_rutina as f')
        ->select('*')
        ->where('tipo_rutina','LIKE','%'.$query.'%')
        ->orderBy('idtipo_rutina','desc')
        ->paginate(10);
        return view('equipo.rutina.tiporu.index',["tiporu"=>$tiporu,"searchText"=>$query]);
    }
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      return view("equipo.rutina.tiporu.create");
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(tiporuFormRequest $request)
  {
    tiporu::create($request->all());
     return redirect()->route('tiporu.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\tiporu  $valrefpru
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $tiporu=tiporu::findOrFail($id);
     return view('equipo.rutina.tiporu.show', compact('tiporu'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\tiporu  $valrefpru
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $tiporu=tiporu::findOrFail($id);
      return view('equipo.rutina.tiporu.edit', compact('tiporu'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\tiporu  $valrefpru
   * @return \Illuminate\Http\Response
   */
  public function update(tiporuFormRequest $request, $id)
  {
    tiporu::findOrFail($id)->update($request->all());
    return redirect()->route('tiporu.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\tiporu  $valrefpru
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    tiporu::findOrFail($id)->delete();
    return redirect()->route('tiporu.index');
  }
}

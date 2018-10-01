<?php

namespace App\Http\Controllers;

use App\subru;
use Illuminate\Http\Request;

use DB;
use App\Http\Requests\subruFormRequest;

class subruController extends Controller
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
        $subru=DB::table('subgrupo_rutina as f')
        ->select('*')
        ->where('subgrupo_rutina','LIKE','%'.$query.'%')
        ->orderBy('idsubgrupo_rutina','desc')
        ->paginate(10);
        return view('equipo.rutina.subru.index',["subru"=>$subru,"searchText"=>$query]);
    }
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      return view("equipo.rutina.subru.create");
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(subruFormRequest $request)
  {
    subru::create($request->all());
     return redirect()->route('subru.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\subru  $valrefpru
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $subru=subru::findOrFail($id);
     return view('equipo.rutina.subru.show', compact('subru'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\subru  $valrefpru
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $subru=subru::findOrFail($id);
      return view('equipo.rutina.subru.edit', compact('subru'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\subru  $valrefpru
   * @return \Illuminate\Http\Response
   */
  public function update(subruFormRequest $request, $id)
  {
    subru::findOrFail($id)->update($request->all());
    return redirect()->route('subru.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\subru  $valrefpru
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    subru::findOrFail($id)->delete();
    return redirect()->route('subru.index');
  }
}

<?php

namespace App\Http\Controllers;

use App\subpru;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests\subpruFormRequest;
class subpruController extends Controller
{
  function __construct()
    {
      $this->middleware(['auth','role:admin,jefe-mantto']);
    }
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
        $subpru=DB::table('subgrupo_prueba as f')
        ->select('*')
        ->where('subgrupo_prueba','LIKE','%'.$query.'%')
        ->orderBy('idsubgrupo_prueba','desc')
        ->paginate(10);
        return view('equipo.rutina.subpru.index',["subpru"=>$subpru,"searchText"=>$query]);
    }
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      return view("equipo.rutina.subpru.create");
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(subpruFormRequest $request)
  {
    subpru::create($request->all());
     return redirect()->route('subpru.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\subpru  $valrefpru
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $subpru=subpru::findOrFail($id);
     return view('equipo.rutina.subpru.show', compact('subpru'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\subpru  $valrefpru
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $subpru=subpru::findOrFail($id);
      return view('equipo.rutina.subpru.edit', compact('subpru'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\subpru  $valrefpru
   * @return \Illuminate\Http\Response
   */
  public function update(subpruFormRequest $request, $id)
  {
    subpru::findOrFail($id)->update($request->all());
    return redirect()->route('subpru.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\subpru  $valrefpru
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    subpru::findOrFail($id)->delete();
    return redirect()->route('subpru.index');
  }
}

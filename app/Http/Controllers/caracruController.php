<?php

namespace App\Http\Controllers;

use App\caracru;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests\caracruFormRequest;

class caracruController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(Request $request)
  {
    function __construct()
      {
        $this->middleware(['auth','role:admin,jefe-mantto']);
      }
    if ($request)
    {
        $query=trim($request->get('searchText'));
        $caracru=DB::table('caracteristica_rutina as f')
        ->select('*')
        ->where('caracteristica_rutina','LIKE','%'.$query.'%')
        ->orderBy('idcaracteristica_rutina','desc')
        ->paginate(10);
        return view('equipo.rutina.caracru.index',["caracru"=>$caracru,"searchText"=>$query]);
    }
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      return view("equipo.rutina.caracru.create");
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(caracruFormRequest $request)
  {
    caracru::create($request->all());
     return redirect()->route('caracru.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\caracru  $valrefpru
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $caracru=caracru::findOrFail($id);
     return view('equipo.rutina.caracru.show', compact('caracru'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\caracru  $valrefpru
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $caracru=caracru::findOrFail($id);
      return view('equipo.rutina.caracru.edit', compact('caracru'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\caracru  $valrefpru
   * @return \Illuminate\Http\Response
   */
  public function update(caracruFormRequest $request, $id)
  {
    caracru::findOrFail($id)->update($request->all());
    return redirect()->route('caracru.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\caracru  $valrefpru
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    caracru::findOrFail($id)->delete();
    return redirect()->route('caracru.index');
  }
}

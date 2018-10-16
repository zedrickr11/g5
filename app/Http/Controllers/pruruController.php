<?php

namespace App\Http\Controllers;

use App\pruru;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests\pruruFormRequest;

class pruruController extends Controller
{
  function __construct()
    {
      $this->middleware(['auth','role:admin,jefe-mantto,jefe-sub']);
      
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
        $pruru=DB::table('prueba_rutina as f')
        ->select('*')
        ->where('prueba_rutina','LIKE','%'.$query.'%')
        ->orderBy('idprueba_rutina','desc')
        ->paginate(10);
        return view('equipo.rutina.pruru.index',["pruru"=>$pruru,"searchText"=>$query]);
    }
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      return view("equipo.rutina.pruru.create");
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(pruruFormRequest $request)
  {
    pruru::create($request->all());
     return redirect()->route('pruru.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\pruru  $valrefpru
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $pruru=pruru::findOrFail($id);
     return view('equipo.rutina.pruru.show', compact('pruru'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\pruru  $valrefpru
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $pruru=pruru::findOrFail($id);
      return view('equipo.rutina.pruru.edit', compact('pruru'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\pruru  $valrefpru
   * @return \Illuminate\Http\Response
   */
  public function update(pruruFormRequest $request, $id)
  {
    pruru::findOrFail($id)->update($request->all());
    return redirect()->route('pruru.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\pruru  $valrefpru
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    pruru::findOrFail($id)->delete();
    return redirect()->route('pruru.index');
  }
}

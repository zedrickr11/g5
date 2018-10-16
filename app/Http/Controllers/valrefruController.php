<?php

namespace App\Http\Controllers;

use App\valrefru;
use Illuminate\Http\Request;
use App\Http\Requests\valrefruFormRequest;
use App\Http\Controllers\Controller;
use DB;

class valrefruController extends Controller
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
        $valrefru=DB::table('valor_ref_rutina as f')
        ->select('*')
        ->where('descripcion','LIKE','%'.$query.'%')
        ->orderBy('idvalor_ref_rutina','desc')
        ->paginate(10);
        return view('equipo.rutina.valrefru.index',["valrefru"=>$valrefru,"searchText"=>$query]);
    }

  //  $valorreftec=valorreftec::all();
//    return view('equipo.caracteristica.valorreftec.index', compact('valorreftec'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
        return view("equipo.rutina.valrefru.create");
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(valrefruFormRequest $request)
  {  valrefru::create($request->all());
    return redirect()->route('valrefru.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\valrefru  $valorreftec
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {  $valrefru=valrefru::findOrFail($id);
    return view('equipo.rutina.valrefru.show', compact('valrefru'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\valorreftec  $caracTec
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
  $valrefru=valrefru::findOrFail($id);
    return view('equipo.rutina.valrefru.edit', compact('valrefru'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\valrefru  $valorreftec
   * @return \Illuminate\Http\Response
   */
  public function update(valrefruFormRequest $request, $id)
  {
    valrefru::findOrFail($id)->update($request->all());
    return redirect()->route('valrefru.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\valrefru  $valorreftec
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {valrefru::findOrFail($id)->delete();
  return redirect()->route('valrefru.index');
  }
}

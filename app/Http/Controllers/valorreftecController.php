<?php

namespace App\Http\Controllers;

use App\valorreftec;
use Illuminate\Http\Request;
use App\Http\Requests\valorreftecFormRequest;
use App\Http\Controllers\Controller;
use DB;

class valorreftecController extends Controller
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
        $valorreftec=DB::table('valor_ref_tec as f')
        ->select('*')
        ->where('nombre_valor_ref_tec','LIKE','%'.$query.'%')
        ->orderBy('idvalor_ref_tec','desc')
        ->paginate(10);
        return view('equipo.caracteristica.valorreftec.index',["valorreftec"=>$valorreftec,"searchText"=>$query]);
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
        return view("equipo.caracteristica.valorreftec.create");
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(valorreftecFormRequest $request)
  {  valorreftec::create($request->all());
    return redirect()->route('valorreftec.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\valorreftec  $valorreftec
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {  $valorreftec=valorreftec::findOrFail($id);
    return view('equipo.caracteristica.valorreftec.show', compact('valorreftec'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\valorreftec  $caracTec
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
  $valorreftec=valorreftec::findOrFail($id);
    return view('equipo.caracteristica.valorreftec.edit', compact('valorreftec'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\valorreftec  $valorreftec
   * @return \Illuminate\Http\Response
   */
  public function update(valorreftecFormRequest $request, $id)
  {
    valorreftec::findOrFail($id)->update($request->all());
    return redirect()->route('valorreftec.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\valorreftec  $valorreftec
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {valorreftec::findOrFail($id)->delete();
  return redirect()->route('valorreftec.index');
  }
}

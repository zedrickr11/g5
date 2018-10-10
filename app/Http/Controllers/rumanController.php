<?php

namespace App\Http\Controllers;

use App\ruman;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests\rumanFormRequest;
use App\tiporu;
use App\Equipo;
use App\PermisoTrabajo;
use App\caracru;
use App\subru;
use App\valrefru;


class rumanController extends Controller
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
        $ruman=DB::table('rutina_mantenimiento as f')
        ->join('tipo_rutina as d','f.idtipo_rutina','=','d.idtipo_rutina')
        ->join('equipo as e','f.idequipo','=','e.idequipo')



      ->select('f.idrutina_mantenimiento','d.tipo_rutina as idtipo_rutina','e.nombre_equipo as idequipo','f.estado_rutina')


        ->where('e.nombre_equipo','LIKE','%'.$query.'%')
        ->orderBy('idrutina_mantenimiento','desc')
        ->paginate(10);
        return view('equipo.rutina.ruman.index',["ruman"=>$ruman,"searchText"=>$query]);
    }

  //  $subcaractec=subcaractec::all();
  //  return view('equipo.caracteristica.subcaractec.index', compact('subcaractec'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $tiporu=tiporu::all();
    $equipo=Equipo::all();
    $caracru=caracru::all();
    $subru=subru::all();
      $valrefru=valrefru::all();
        $ruman=ruman::all();

        $permisotrabajo=PermisoTrabajo::all();

    return view("equipo.rutina.ruman.create",compact('tiporu','equipo','permisotrabajo','caracru','subru','valrefru','ruman'));


  //  return view("equipo.rutina.ruman.create",compact('tiporu','equipo'));

  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(rumanFormRequest $request)
  {  ruman::create($request->all());
    return redirect()->route('ruman.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\ruman  $caracTec
   * @return \Illuminate\Http\Response
   */
  public function show($id)

  {   $tiporu=tiporu::all();
    $equipo=Equipo::all();
    $ruman=ruman::findOrFail($id);
        $permisotrabajo=PermisoTrabajo::all();
    return view('equipo.rutina.ruman.show', compact('ruman','tiporu','equipo','permisotrabajo'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\ruman  $caracTec
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $tiporu=tiporu::all();
    $equipo=Equipo::all();
  $ruman=ruman::findOrFail($id);
      $permisotrabajo=PermisoTrabajo::all();
    return view('equipo.rutina.ruman.edit', compact('ruman','tiporu','equipo','permisotrabajo'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\ruman  $subcaractec
   * @return \Illuminate\Http\Response
   */
  public function update(rumanFormRequest $request, $id)
  {
    ruman::findOrFail($id)->update($request->all());
    return redirect()->route('ruman.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\ruman  $subcaractec
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {ruman::findOrFail($id)->delete();
  return redirect()->route('ruman.index');
  }
}

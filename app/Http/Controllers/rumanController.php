<?php

namespace App\Http\Controllers;

use App\ruman;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests\rumanFormRequest;
use App\tiporu;
use App\Equipo;

use App\PermisoTrabajo;
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
        ->join('notificacion as d','f.idrutina_mantenimiento','=','d.rutina_mantenimiento_idrutina_mantenimiento')
        ->select('f.idrutina_mantenimiento','f.idtipo_rutina','f.idequipo','f.estado_rutina','d.descripcion_noti','d.estado_notificacion')


        ->where('idequipo','LIKE','%'.$query.'%')
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

        $permisotrabajo=PermisoTrabajo::all();

    return view("equipo.rutina.ruman.create",compact('tiporu','equipo','permisotrabajo'));


    return view("equipo.rutina.ruman.create",compact('tiporu','equipo'));

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
   * @param  \App\subcaractec  $caracTec
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {  $subcaractec=subcaractec::findOrFail($id);
    return view('equipo.caracteristica.subcaractec.show', compact('subcaractec'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\subcaractec  $caracTec
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
  $subcaractec=subcaractec::findOrFail($id);
    return view('equipo.caracteristica.subcaractec.edit', compact('subcaractec'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\subcaractec  $subcaractec
   * @return \Illuminate\Http\Response
   */
  public function update(subcaractecFormRequest $request, $id)
  {
    subcaractec::findOrFail($id)->update($request->all());
    return redirect()->route('subcaractec.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\subcaractec  $subcaractec
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {subcaractec::findOrFail($id)->delete();
  return redirect()->route('subcaractec.index');
  }
}

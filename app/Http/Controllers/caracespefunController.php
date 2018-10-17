<?php

namespace App\Http\Controllers;

use App\caracespefun;
use Illuminate\Http\Request;
use App\Http\Requests\caracespefunFormRequest;
use App\Http\Controllers\Controller;

use DB;
class caracespefunController extends Controller
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
        $caracespefun=DB::table('caracteristica_especial_funcionamiento as f')
        ->select('*')
        ->where('nombre_caracteristica_especial','LIKE','%'.$query.'%')
        ->orderBy('idcaracteristica_especial','desc')
        ->paginate(10);
        return view('equipo.caracteristica.caracespefun.index',["caracespefun"=>$caracespefun,"searchText"=>$query]);
    }

  //  $caracespefun=caracespefun::all();
    //return view('equipo.caracteristica.caracespefun.index', compact('caracespefun'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
        return view("equipo.caracteristica.caracespefun.create");
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(caracespefunFormRequest $request)
  {  caracespefun::create($request->all());
    return redirect()->route('caracespefun.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\caracespefun  $caracTec
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {  $caracespefun=caracespefun::findOrFail($id);
    return view('equipo.caracteristica.caracespefun.show', compact('caracespefun'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\caracespefun  $caracTec
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
  $caracespefun=caracespefun::findOrFail($id);
    return view('equipo.caracteristica.caracespefun.edit', compact('caracespefun'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\caracespefun  $caracTec
   * @return \Illuminate\Http\Response
   */
  public function update(caracespefunFormRequest $request, $id)
  {
    caracespefun::findOrFail($id)->update($request->all());
    return redirect()->route('caracespefun.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\CaracTec  $caracTec
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {caracespefun::findOrFail($id)->delete();
  return redirect()->route('caracespefun.index');
  }
}

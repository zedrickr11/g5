<?php

namespace App\Http\Controllers;

use App\UnidadSalud;
use App\Hospital;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Http\Requests\UnidadSaludFormRequest;
class UnidadSaludController extends Controller
{ function __construct()
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
    /*  $unidades=UnidadSalud::all();
    return view('hospital.unidad.index', compact('unidades'));
*/  if ($request)
  {
      $query=trim($request->get('searchText'));
        $unidades=DB::table('unidadsalud as u')
        ->join('hospital as h', 'u.idhospital','=', 'h.idhospital')
        ->select('u.idunidadsalud','u.unidad_salud','h.hospital as hospi')
        ->where('unidad_salud','LIKE','%'.$query.'%')
        ->orderBy('idunidadsalud','asc')
        ->paginate(10);

return view('hospital.unidad.index', ["unidades"=>$unidades,"searchText"=>$query]);
    }



    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $hospitals=Hospital::all();
        return view("hospital.unidad.create",compact('hospitals'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UnidadSaludFormRequest $request)
    {

      UnidadSalud::create($request->all());
      return redirect()->route('unidad.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UnidadSalud  $unidadSalud
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $hospitals=Hospital::all();
      $unidades=UnidadSalud::findOrFail($id);
      return view('hospital.unidad.show', compact('unidades'), compact('hospitals'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UnidadSalud  $unidadSalud
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $hospitals=Hospital::all();
      $unidades=UnidadSalud::findOrFail($id);
      return view('hospital.unidad.edit', compact('unidades'),compact('hospitals'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UnidadSalud  $unidadSalud
     * @return \Illuminate\Http\Response
     */
    public function update(UnidadSaludFormRequest $request, $id)
    {
      UnidadSalud::findOrFail($id)->update($request->all());
      return redirect()->route('unidad.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UnidadSalud  $unidadSalud
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      UnidadSalud::findOrFail($id)->delete();
      return redirect()->route('unidad.index');
    }
}

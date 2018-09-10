<?php

namespace App\Http\Controllers;
use App\Hospital;
use App\Region;
use App\Departamento;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class DepartamentoController extends Controller
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
            $departamentos= DB::table('departamento as d')
            ->select('*')
            ->where('depto','LIKE','%'.$query.'%')
            ->orderBy('iddepartamento','desc')
            ->join('hospital as h', 'd.idhospital','=', 'h.idhospital')
            ->join('region as r', 'd.idregion','=', 'r.idregion')
            ->select('d.iddepartamento','d.depto','h.hospital as hospi','r.region as regi')
            ->get();
    return view('hospital.departamento.index', ["departamentos"=>$departamentos,"searchText"=>$query]);
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
            $regiones=Region::all();
        return view("hospital.departamento.create",compact('hospitals'),compact('regiones'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Departamento::create($request->all());
      return redirect()->route('departamento.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
          $hospitals=Hospital::all();
          $regions=Region::all();
          $departamentos=Departamento::findOrFail($id);
          return view('hospital.departamento.show', compact('departamentos','hospitals','regions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $hospitals=Hospital::all();
        $regions=Region::all();
      $departamentos=Departamento::findOrFail($id);
      return view('hospital.departamento.edit', compact('departamentos','hospitals','regions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      Departamento::findOrFail($id)->update($request->all());
      return redirect()->route('departamento.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Departamento::findOrFail($id)->delete();
      return redirect()->route('departamento.index');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use App\Http\Requests;

use App\Http\Requests;
use App\Http\Requests\FabricanteFormRequest;
use DB;
use App\Fabricante;
use Carbon\Carbon;

class FabricanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //$fabricantes=Fabricante::all();
        if ($request)
        {
            $query=trim($request->get('searchText'));
            $fabricantes=DB::table('fabricante as f')
            ->select('*')
            ->where('contacto_fabricante','LIKE','%'.$query.'%')
            ->orderBy('idfabricante','desc')
            ->paginate(3);
            return view('equipo.fabricante.index',["fabricantes"=>$fabricantes,"searchText"=>$query]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view("equipo.fabricante.create",compact('alerta'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FabricanteFormRequest $request)
    {


        Fabricante::create($request->all());
        return redirect()->route('fabricante.create');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fabricantes=Fabricante::findOrFail($id);
        return view('equipo.fabricante.show', compact('fabricantes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fabricantes=Fabricante::findOrFail($id);
        return view('equipo.fabricante.edit', compact('fabricantes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FabricanteFormRequest $request, $id)
    {
      Fabricante::findOrFail($id)->update($request->all());
      return redirect()->route('fabricante.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Fabricante::findOrFail($id)->delete();
      return redirect()->route('fabricante.index');
    }
}

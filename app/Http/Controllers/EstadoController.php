<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Estado;

class EstadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //$estados=Estado::all();
        //return view('equipo.estado.index', compact('estados'));
         if ($request)
        {
            $query=trim($request->get('searchText'));
            $estados=DB::table('estado_equipo as f')
            ->select('*')
            ->where('estado','LIKE','%'.$query.'%')
            ->orderBy('idestado','desc')
            ->paginate(10);
            return view('equipo.estado.index',["estados"=>$estados,"searchText"=>$query]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("equipo.estado.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Estado::create($request->all());
        return redirect()->route('estado.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $estados=Estado::findOrFail($id);
        return view('equipo.estado.show', compact('estados'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estados=Estado::findOrFail($id);
        return view('equipo.estado.edit', compact('estados'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Estado::findOrFail($id)->update($request->all());
      return redirect()->route('estado.index');    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Estado::findOrFail($id)->delete();
      return redirect()->route('estado.index');    }
}

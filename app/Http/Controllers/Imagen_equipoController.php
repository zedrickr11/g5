<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

use App\Http\Requests;
use App\Http\Requests\Imagen_equipoFormRequest;
use DB;
use App\Imagen_equipo;
use App\Equipo;

use Carbon\Carbon;

class Imagen_equipoController extends Controller
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
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $equipo=Equipo::all();
        return view('equipo.vista.create',compact('equipo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Imagen_equipoFormRequest $request)
    {
        $imagen=new Imagen_equipo;
        $imagen->idequipo=$request->get('idequipo');
        $imagen->descripcion_imagen=$request->get('descripcion_imagen');

        if (Input::hasFile('imagen')){
          $file=Input::file('imagen');
          $file->move(public_path().'/img/equipo/',$file->getClientOriginalName());
            $imagen->imagen=$file->getClientOriginalName();
        }
        $imagen->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

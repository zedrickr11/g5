<?php

namespace App\Http\Controllers;
use App\Http\Requests\AccesorioFormRequest;
use App\Accesorio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Equipo;
class AccesorioController extends Controller
{
  function __construct()
    {
      $this->middleware(['auth','role:admin,jefe-mantto,jefe-sub,tec-ing']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $equipo= Equipo::all();
        return view("accesorio.create", compact('equipo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AccesorioFormRequest $request)
    {
        Accesorio::create($request->all());
        return back()->with('accesorio', 'Se agrego un accesorio');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Accesorio  $accesorio
     * @return \Illuminate\Http\Response
     */
    public function show(Accesorio $accesorio)
    {
        $accesorio=Accesorio::findOrFail($id);
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Accesorio  $accesorio
     * @return \Illuminate\Http\Response
     */
    public function edit(Accesorio $accesorio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Accesorio  $accesorio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Accesorio $accesorio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Accesorio  $accesorio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Accesorio::findOrFail($id)->delete();
        return back();
    }
}

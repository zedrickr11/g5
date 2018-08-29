<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests;
use App\Http\Requests\GrupoFormRequest;
use DB;
use App\Grupo;
use Carbon\Carbon;

class GrupoController extends Controller
{

      /**
       * Display a listing of the resource.
       *
       * @return \Illuminate\Http\Response
       */
      public function index()
      {
        $grupos=Grupo::all();
        return view('equipo.grupo.index', compact('grupos'));
      }

      /**
       * Show the form for creating a new resource.
       *
       * @return \Illuminate\Http\Response
       */
      public function create()
      {
            return view("equipo.grupo.create");
      }

      /**
       * Store a newly created resource in storage.
       *
       * @param  \Illuminate\Http\Request  $request
       * @return \Illuminate\Http\Response
       */
      public function store(GrupoFormRequest $request)
      {
        Grupo::create($request->all());
        return redirect()->route('grupo.index');
      }

      /**
       * Display the specified resource.
       *
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function show($id)
      {
        $grupos=Grupo::findOrFail($id);
        return view('equipo.grupo.show', compact('grupos'));
      }

      /**
       * Show the form for editing the specified resource.
       *
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function edit($id)
      {
        $grupos=Grupo::findOrFail($id);
        return view('equipo.grupo.edit', compact('grupos'));
      }

      /**
       * Update the specified resource in storage.
       *
       * @param  \Illuminate\Http\Request  $request
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function update(GrupoFormRequest $request, $id)
      {
        Grupo::findOrFail($id)->update($request->all());
        return redirect()->route('grupo.index');
      }

      /**
       * Remove the specified resource from storage.
       *
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function destroy($id)
      {
        Grupo::findOrFail($id)->delete();
        return redirect()->route('grupo.index');
      }
}

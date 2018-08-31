<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\GrupoFormRequest;
use DB;
use App\Grupo;
use App\Subgrupo;
use Carbon\Carbon;

class SubgrupoController extends Controller
{


        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
          $subgrupos=DB::table('subgrupo as s')
          ->join('grupo as g','g.idgrupo','=','s.idgrupo')
          ->select('s.idsubgrupo','s.codigosubgrupo','s.subgrupo','g.grupo as grupo')
          ->get();

          return view('equipo.subgrupo.index', compact('subgrupos'));
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
              $grupos=Grupo::all();
              return view("equipo.subgrupo.create",compact('grupos'));
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(GrupoFormRequest $request)
        {
          Subgrupo::create($request->all());
          return redirect()->route('subgrupo.index');
        }

        /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function show($id)
        {
          //$subgrupos=Subgrupo::findOrFail($id);
          $subgrupos=DB::table('subgrupo as s')
            ->join('grupo as g','g.idgrupo','=','s.idgrupo')
            ->select('s.idsubgrupo','s.codigosubgrupo','s.subgrupo','g.grupo as grupo')
            ->where('s.idsubgrupo','=',$id)
            ->first();
          return view('equipo.subgrupo.show', compact('subgrupos'));
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function edit($id)
        {
          $subgrupos=Subgrupo::findOrFail($id);
          $grupos=Grupo::all();
          return view('equipo.subgrupo.edit', compact('subgrupos','grupos'));
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
          Subgrupo::findOrFail($id)->update($request->all());
          return redirect()->route('subgrupo.index');
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
          Subgrupo::findOrFail($id)->delete();
          return redirect()->route('subgrupo.index');
        }
}

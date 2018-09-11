<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\Conf_corrFormRequest;
use DB;
use App\Subgrupo;
use App\Conf_corr;
use Carbon\Carbon;

class Conf_corrController extends Controller
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
                  $confcorrelativo=DB::table('conf_corr as c')
                  ->join('subgrupo as g','g.idsubgrupo','=','c.idsubgrupo')
                  ->select('c.idconf_corr','c.inicio','c.fin','c.actual','c.estado','g.subgrupo as subgrupo')
                  ->where('g.subgrupo','LIKE','%'.$query.'%')
                  ->orderBy('c.idconf_corr','desc')
                  ->paginate(10);
                  return view('equipo.confcorrelativo.index',["confcorrelativo"=>$confcorrelativo,"searchText"=>$query]);
              }


              //return view('equipo.subgrupo.index', compact('subgrupos'));
            }

            /**
             * Show the form for creating a new resource.
             *
             * @return \Illuminate\Http\Response
             */
            public function create()
            {
                  $grupos=Subgrupo::all();
                  return view("equipo.confcorrelativo.create",compact('grupos'));
            }

            /**
             * Store a newly created resource in storage.
             *
             * @param  \Illuminate\Http\Request  $request
             * @return \Illuminate\Http\Response
             */
            public function store(Conf_corrFormRequest $request)
            {
              Conf_corr::create($request->all());
              return redirect()->route('confcorrelativo.index');
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
              $confcorrelativo=DB::table('conf_corr as c')
                ->join('subgrupo as g','g.idsubgrupo','=','c.idsubgrupo')
                ->select('c.idconf_corr','c.inicio','c.fin','c.actual','c.estado','g.subgrupo as subgrupo')
                ->where('c.idconf_corr','=',$id)
                ->first();
              return view('equipo.confcorrelativo.show', compact('confcorrelativo'));
            }

            /**
             * Show the form for editing the specified resource.
             *
             * @param  int  $id
             * @return \Illuminate\Http\Response
             */
            public function edit($id)
            {
              $confcorrelativo=Conf_corr::findOrFail($id);
              $grupos=Subgrupo::all();
              return view('equipo.confcorrelativo.edit', compact('confcorrelativo','grupos'));
            }

            /**
             * Update the specified resource in storage.
             *
             * @param  \Illuminate\Http\Request  $request
             * @param  int  $id
             * @return \Illuminate\Http\Response
             */
            public function update(Conf_corrFormRequest $request, $id)
            {
              Conf_corr::findOrFail($id)->update($request->all());
              return redirect()->route('confcorrelativo.index');
            }

            /**
             * Remove the specified resource from storage.
             *
             * @param  int  $id
             * @return \Illuminate\Http\Response
             */
            public function destroy($id)
            {
              Conf_corr::findOrFail($id)->delete();
              return redirect()->route('confcorrelativo.index');
            }

}

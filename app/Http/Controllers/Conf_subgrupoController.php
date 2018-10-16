<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\Conf_subgrupoFormRequest;
use DB;
use App\Grupo;
use App\Conf_subgrupo;
use Carbon\Carbon;

class Conf_subgrupoController extends Controller
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
          public function index(Request $request)
          {
            if ($request)
            {
                $query=trim($request->get('searchText'));
                $confsubgrupos=DB::table('conf_subgrupo as c')
                ->join('grupo as g','g.idgrupo','=','c.idgrupo')
                ->select('c.idconf_subgrupo','c.inicio','c.fin','c.actual','c.estado','g.grupo as grupo')
                ->where('g.grupo','LIKE','%'.$query.'%')
                ->orderBy('c.idconf_subgrupo','desc')
                ->paginate(5);
                return view('equipo.confsubgrupo.index',["confsubgrupos"=>$confsubgrupos,"searchText"=>$query]);
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
                $grupos=Grupo::all();
                return view("equipo.confsubgrupo.create",compact('grupos'));
          }

          /**
           * Store a newly created resource in storage.
           *
           * @param  \Illuminate\Http\Request  $request
           * @return \Illuminate\Http\Response
           */
          public function store(Conf_subgrupoFormRequest $request)
          {
            Conf_subgrupo::create($request->all());
            return redirect()->route('confsubgrupo.index');
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
            $confsubgrupos=DB::table('conf_subgrupo as c')
              ->join('grupo as g','g.idgrupo','=','c.idgrupo')
              ->select('c.idconf_subgrupo','c.inicio','c.fin','c.actual','c.estado','g.grupo as grupo')
              ->where('c.idconf_subgrupo','=',$id)
              ->first();
            return view('equipo.confsubgrupo.show', compact('confsubgrupos'));
          }

          /**
           * Show the form for editing the specified resource.
           *
           * @param  int  $id
           * @return \Illuminate\Http\Response
           */
          public function edit($id)
          {
            $confsubgrupos=Conf_subgrupo::findOrFail($id);
            $grupos=Grupo::all();
            return view('equipo.confsubgrupo.edit', compact('confsubgrupos','grupos'));
          }

          /**
           * Update the specified resource in storage.
           *
           * @param  \Illuminate\Http\Request  $request
           * @param  int  $id
           * @return \Illuminate\Http\Response
           */
          public function update(Conf_subgrupoFormRequest $request, $id)
          {
            Conf_subgrupo::findOrFail($id)->update($request->all());
            return redirect()->route('confsubgrupo.index');
          }

          /**
           * Remove the specified resource from storage.
           *
           * @param  int  $id
           * @return \Illuminate\Http\Response
           */
          public function destroy($id)
          {
            Conf_subgrupo::findOrFail($id)->delete();
            return redirect()->route('confsubgrupo.index');
          }
}

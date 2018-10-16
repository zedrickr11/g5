<?php

namespace App\Http\Controllers;

use App\AreaMantenimiento;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AreaMantenimientoFormRequest;
use DB;

class AreaMantenimientoController extends Controller
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
                  $areas=DB::table('area_mantenimiento as a')
                  ->select('*')
                  ->where('area_mantenimiento','LIKE','%'.$query.'%')
                  ->orderBy('idarea_mantenimiento','desc')
                  ->paginate(10);
          return view('mantenimiento.areamantenimiento.index', ["areas"=>$areas,"searchText"=>$query]);
              }
        }

        /**
           * Show the form for creating a new resource.
           *
           * @return \Illuminate\Http\Response
           */
          public function create()
          {
            return view("mantenimiento.areamantenimiento.create");
          }

          /**
           * Store a newly created resource in storage.
           *
           * @param  \Illuminate\Http\Request  $request
           * @return \Illuminate\Http\Response
           */
           public function store(AreaMantenimientoFormRequest $request)
           {
             AreaMantenimiento::create($request->all());
             return redirect()->route('areamantenimiento.index');
           }

          /**
           * Display the specified resource.
           *
           * @param  \App\AreaMantenimiento  $areaMantenimiento
           * @return \Illuminate\Http\Response
           */
           public function show($id)
           {
             $areas=AreaMantenimiento::findOrFail($id);
             return view('mantenimiento.areamantenimiento.show', compact('areas'));
           }

          /**
           * Show the form for editing the specified resource.
           *
           * @param  \App\AreaMantenimiento  $areaMantenimiento
           * @return \Illuminate\Http\Response
           */
           public function edit($id)
           {
             $areas=AreaMantenimiento::findOrFail($id);
             return view('mantenimiento.areamantenimiento.edit', compact('areas'));
           }

          /**
           * Update the specified resource in storage.
           *
           * @param  \Illuminate\Http\Request  $request
           * @param  \App\AreaMantenimiento  $areaMantenimiento
           * @return \Illuminate\Http\Response
           */
           public function update(AreaMantenimientoFormRequest $request, $id)
           {
             AreaMantenimiento::findOrFail($id)->update($request->all());
             return redirect()->route('areamantenimiento.index');
           }

          /**
           * Remove the specified resource from storage.
           *
           * @param  \App\AreaMantenimiento  $areaMantenimiento
           * @return \Illuminate\Http\Response
           */
           public function destroy($id)
           {
             AreaMantenimiento::findOrFail($id)->delete();
             return redirect()->route('areamantenimiento.index');
           }
}

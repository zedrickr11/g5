<?php

namespace App\Http\Controllers;

use App\Region;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;


class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        if ($request)
        {
            $query=trim($request->get('searchText'));
              $regiones=DB::table('region as r')
              ->select('*')
              ->where('region','LIKE','%'.$query.'%')
              ->orderBy('idregion','desc')
              ->paginate(10);
      return view('hospital.region.index', ["regiones"=>$regiones,"searchText"=>$query]);
          }


          if ($request)
          {
              $query=trim($request->get('searchText'));
              $fabricantes=DB::table('fabricante as f')
              ->select('*')
              ->where('contacto_fabricante','LIKE','%'.$query.'%')
              ->orderBy('idfabricante','desc')
              ->paginate(10);
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
        return view("hospital.region.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Region::create($request->all());
      return redirect()->route('region.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $regiones=Region::findOrFail($id);
      return view('hospital.region.show', compact('regiones'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $regiones=Region::findOrFail($id);
      return view('hospital.region.edit', compact('regiones'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      Region::findOrFail($id)->update($request->all());
      return redirect()->route('region.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Region::findOrFail($id)->delete();
      return redirect()->route('region.index');
    }
}

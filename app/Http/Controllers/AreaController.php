<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests;
use App\Http\Requests\AreaFormRequest;
use DB;
use App\Area;
use Carbon\Carbon;


class AreaController extends Controller
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
          $areas=DB::table('area as a')
          ->select('*')
          ->where('nombre_area','LIKE','%'.$query.'%')
          ->orderBy('idarea','desc')
          ->paginate(10);
          return view('equipo.area.index',["areas"=>$areas,"searchText"=>$query]);
      }


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view("equipo.area.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AreaFormRequest $request)
    {
      Area::create($request->all());
      return redirect()->route('area.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $areas=Area::findOrFail($id);
      return view('equipo.area.show', compact('areas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $areas=Area::findOrFail($id);
      return view('equipo.area.edit', compact('areas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AreaFormRequest $request, $id)
    {
      Area::findOrFail($id)->update($request->all());
      return redirect()->route('area.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Area::findOrFail($id)->delete();
      return redirect()->route('area.index');
    }
}

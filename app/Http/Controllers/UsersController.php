<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use App\Asignacion;

use App\Http\Requests\UserFormRequest;
use App\Http\Requests\UserUpdateFormRequest;
use App\Http\Requests\AsignacionFormRequest;

use Illuminate\Support\Facades\Redirect;


use Illuminate\Support\Facades\Input;
use DB;

class UsersController extends Controller
{   function __construct()
    {
      $this->middleware(['auth','role:admin']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $users= User::all();
        return view ('users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserFormRequest $request)
    {
      $usuario=new User;
      $usuario->name=$request->get('name');
      $usuario->email=$request->get('email');
      $usuario->password=bcrypt($request->get('password'));
      $usuario->save();
      return Redirect::to('usuarios');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $role=Role::all();
      return view("users.show",["usuario"=>User::findOrFail($id),"role"=>$role]);
    }
    public function role(Request $request)
    {
      $role=new Asignacion;

      $role->user_id=$request->get('user_id');
      $role->role_id=$request->get('role_id');

      $role->save();
      return Redirect::to('usuarios');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      return view("users.edit",["usuario"=>User::findOrFail($id)]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateFormRequest $request, $id)
    {
      $usuario=User::findOrFail($id);
      $usuario->name=$request->get('name');
      $usuario->email=$request->get('email');
      $usuario->password=bcrypt($request->get('password'));
      $usuario->update();
      return Redirect::to('usuarios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Asignacion::findOrFail($id)->delete();
      return Redirect::to('usuarios');

    }

    public function listRole($id)
		{
      $user=DB::table('users')
      ->select('name')
      ->where('id','=',$id)
      ->first();
			$listado=DB::table('users as u')
				->join('role_user as a','u.id','=','a.user_id')
				->join('roles as r','r.id','=','a.role_id')
				->select('a.id as id','r.display_name as nombre')
        ->where('u.id','=',$id)
				->get();
        return view ('users.listado',compact('listado','user'));

		}
}

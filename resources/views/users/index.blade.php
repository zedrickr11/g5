@extends('layouts.admin')
@section('contenido')
  <section class="content-header">
        <h1>
          Seguridad
          <small>Usuarios</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-user"></i> Usuarios</a></li>
          <li class="active">Usuarios</li>
        </ol>
  	</section>
  	<section class="content">


  <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="box">
              <div class="box-header">
  			  <h3 class="box-title">Listado de Usuarios  <a href="usuarios/create"><button class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></button></a>
  			  		</h3>
            <!--  <a href="#" target="_blank"><button class="btn btn-info"><span class="glyphicon glyphicon-print"></span> </button></a>--></h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">

                  <div class="col-md-12">
                    <div class="table-responsive">
                      <table  class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>Id</th>
                          <th>Nombre</th>
                          <th>Correo electrónico</th>
                          <th>Rol</th>
                          <th>Opciones</th>
                        </tr>
                        </thead>
                        <tbody>
                  @foreach ($users as $user)
                  <tr>
                    <td>{{ $user->id}}</td>
                    <td><a href="{{route('usuarios.show',$user->id)}}">{{ $user->name}}</a></td>
                    <td>{{ $user->email}}</td>
                    <td>
                      @foreach ($user->roles as $role)
                        <a href="{{route('usuarios.list',$user->id)}}">{{$role->display_name }}</a>
                      @endforeach
                    </td>



                    <td>
                      <a href="{{route('usuarios.edit',$user->id)}}">
                        <button type="button" class="btn btn-warning btn-sm" name="button"><span class="glyphicon glyphicon-cog"></span> </button>
                      </a>



                    </td>
                  </tr>

                  @endforeach
                        </tbody>
                        <tfoot>

                        </tfoot>
                </table>

                    </div>
                  </div>



              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->


            <!-- /.box -->
          </div>
          <!-- /.col -->
        </div>

  </section>
@endsection

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
  			  <h3 class="box-title"><a href="{{route('usuarios.index')}}">
            <button type="button" name="atras" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> </button>
          </a>Roles de: {{ $user->name }}
  			  		</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">

                  <div class="col-md-12">
                    <div class="table-responsive">
                      <table  class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>Id</th>
                          <th>Rol</th>

                          <th>Opciones</th>
                        </tr>
                        </thead>
                        <tbody>
                  @foreach ($listado as $user)
                  <tr>
                    <td>{{ $user->id}}</td>
                    <td>{{ $user->nombre}}</td>




                    <td>
                      <form style="display: inline" method="POST" action="{{route('usuarios.destroy', $user->id)}}">
                      {!!method_field('DELETE')!!}
                      {!!csrf_field()!!}
                        <button type="submit" class="btn btn-danger btn-sm" name="button"><span class="glyphicon glyphicon-trash"></span> </button>
                      </form>



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
  @push ('scripts')
    <script>
    $('#liSeguridad').addClass("treeview active");
    $('#liUsers').addClass("active");
    </script>

  @endpush
@endsection

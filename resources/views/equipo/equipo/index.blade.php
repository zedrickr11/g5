@extends ('layouts.admin')
@section ('contenido')
<section class="content-header">
      <h1>
        Equipo
        <small>Equipo</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-tv"></i> Equipo</a></li>
        <li class="active">Equipo</li>
      </ol>
	</section>
	<section class="content">


<div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="box">
            <div class="box-header">
			  <h3 class="box-title">Listado de Equipos <a href="equipo/create"><button class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> </button></a>
			  		<a href="#" target="_blank"><button class="btn btn-info"><span class="glyphicon glyphicon-print"></span> </button></a></h3>
            </div>

            <!-- /.box-header -->
            <div class="box-body">
              @include('equipo.equipo.search')
              <div class="col-md-12">
                <div class="table-responsive">
                  <table  class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Id</th>
                      <th>Equipo</th>
                      <th>Marca</th>
                      <th>Modelo</th>
                      <th>Serie</th>
                      <th>Estado</th>

                      <th>Opciones</th>
                    </tr>
                    </thead>
                    <tbody>
              @foreach ($equipos as $eq)
              <tr>
                <td>{{ $eq->idequipo}}</td>
                <td>{{ $eq->nombre_equipo}}</td>
                <td>{{ $eq->marca}}</td>
                <td>{{ $eq->modelo}}</td>
                <td>{{ $eq->serie}}</td>
                <td>{{ $eq->estado}}</td>

                <td>

                    <a href="{{route('equipo.edit',$eq->idequipo)}}">
                      <button type="button" class="btn btn-warning btn-sm" name="button"><span class="glyphicon glyphicon-cog"></span> </button>
                    </a>
                    <a href="{{route('equipo.show',$eq->idequipo)}}">
                      <button type="button" class="btn btn-info btn-sm" name="button"><span class="glyphicon glyphicon-info-sign"></span> </button>
                    </a>
                    <form style="display: inline" method="POST" action="{{route('equipo.destroy', $eq->idequipo)}}">
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
            {!! $equipos->links() !!}
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

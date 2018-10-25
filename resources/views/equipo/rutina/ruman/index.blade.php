@extends ('layouts.admin')
@section ('contenido')
<section class="content-header">
      <h1>
        Rutinas
        <small>Rutina mantenimiento</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-th"></i> Rutinas</a></li>
        <li class="active">Rutina mantenimiento</li>
      </ol>
	</section>
	<section class="content">


<div class="row">

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="box">
            <div class="box-header">

			  <h3 class="box-title">Listado de rutina mantenimiento
			  	<!--	<a href="#" target="_blank"><button class="btn btn-info"><span class="glyphicon glyphicon-print"></span> </button></a>--></h3>
            </div>
            <!-- /.box-header -->

            <div class="box-body">
                  @include('equipo.rutina.ruman.search')
                  <br>
                  <br>
                  <br>

              <div class="table-responsive">
                <table  class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Equipo</th>
                    <th>Tipo de rutina</th>

                    <th>Estado</th>




                    <th>Opciones</th>
                  </tr>
                  </thead>
                  <tbody>
            @foreach ($ruman as $cat)
            <tr>
              <td>{{ $cat->idrutina_mantenimiento}}</td>
              <td>{{ $cat->nombre_equipo}}</td>

              <td>{{ $cat->idtipo_rutina}}</td>

              <td>{{ $cat->estado_rutina}}</td>


              <td>

                
                  <a href="{{route('ruman.show',$cat->idrutina_mantenimiento)}}">
                    <button type="button" class="btn btn-info btn-sm" name="button"><span class="glyphicon glyphicon-info-sign"></button>
                  </a>


                  <!--<form style="display: inline" method="POST" action="{{route('ruman.destroy', $cat->idrutina_mantenimiento)}}">
                  {!!method_field('DELETE')!!}
                  {!!csrf_field()!!}
                    <button type="submit" class="btn btn-danger btn-sm" name="button"><span class="glyphicon glyphicon-trash"></button>
                  </form>
-->

              </td>
            </tr>

            @endforeach
                  </tbody>
                  <tfoot>

                  </tfoot>
          </table>
              </div>
              {!! $ruman->appends(['searchText'=>request('searchText')])->links() !!}


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
$('#liRutinas').addClass("treeview active");

$('#liRuman').addClass("active");

</script>
@endpush
@endsection

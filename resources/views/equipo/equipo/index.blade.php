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
			  </h3>	  </div>

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


                <td>
                  <a href="{{route('existente',$eq->idequipo)}}" >
                    <button type="button" class="btn btn-info btn-sm" name="button"><span class="fa fa-copy "></span></button>
                  </a>
                  <a href="{{route('actualizar',$eq->idequipo)}}" >
                    <button type="button" class="btn btn-warning btn-sm" name="button"><span class="glyphicon glyphicon-info-sign "></span></button>
                  </a>







                </td>
              </tr>

              @endforeach
                    </tbody>
                    <tfoot>

                    </tfoot>
            </table>
            {!! $equipos->appends(['searchText'=>request('searchText')])->links() !!}
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

</section
@push ('scripts')
<script>
$('#liEq').addClass("treeview active");
$('#liEquipo').addClass("active");
</script>
@endpush
@endsection

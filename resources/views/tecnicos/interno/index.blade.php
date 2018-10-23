@extends ('layouts.admin')
@section ('contenido')
<section class="content-header">
      <h1>
        Tecnicos
        <small>Tecnico Interno</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-user-circle"></i> Tecnicos Internos</a></li>
        <li class="active">Listado</li>
      </ol>
	</section>
	<section class="content">


<div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Listado de Tecnicos  <a href="{{route('interno.create')}}"><button class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></button></a>
                  </h3>


            </div>
            <!-- /.box-header -->
            <div class="box-body">
              @include('tecnicos.interno.search')
                <div class="col-md-12">
              <div class="table-responsive">
                <table  class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Nombre del Tecnico</th>
                    <th>Codigo del Tecnico</th>
                    <th>Opciones</th>
                  </tr>
                  </thead>
                  <tbody>
            @foreach ($internos as $in)
            <tr>
              <td>{{ $in->idtecnico}}</td>
              <td>{{ $in->nombre_tecnico}}</td>
              <td>{{ $in->codigo_tecnico}}</td>


              <td>

                <a href="{{route('interno.edit',$in->idtecnico)}}">
                <button type="button" class="btn btn-warning btn-sm" name="button"><span class="glyphicon glyphicon-cog"></span> </button>
                  </a>
                              



              </td>
            </tr>

            @endforeach
                  </tbody>
                  <tfoot>

                  </tfoot>
          </table>
          {!!$internos->appends(['searchText'=>request('searchText')])->links() !!}


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
  $('#liTecnicos').addClass("treeview active");
  $('#liInternos').addClass("active");
  </script>
@endpush
@endsection

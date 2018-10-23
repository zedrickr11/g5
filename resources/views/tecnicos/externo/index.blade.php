@extends ('layouts.admin')
@section ('contenido')
<section class="content-header">
      <h1>
        Tecnicos
        <small>Tecnico Externo</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-user-circle"></i> Tecnicos Externos</a></li>
        <li class="active">Listado</li>
      </ol>
	</section>
	<section class="content">


<div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Listado de Tecnicos  <a href="{{route('externo.create')}}"><button class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></button></a>
                  </h3>


            </div>
            <!-- /.box-header -->
            <div class="box-body">
              @include('tecnicos.externo.search')
                <div class="col-md-12">
              <div class="table-responsive">
                <table  class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Nombre del Tecnico</th>
                    <th>Telefono </th>
                    <th>Empresa</th>
                        <th>Opciones</th>
                  </tr>
                  </thead>
                  <tbody>
            @foreach ($externos as $ex)
            <tr>
              <td>{{ $ex->idtecnico_externo}}</td>
              <td>{{ $ex->nombre_tecnico_externo}}</td>
              <td>{{ $ex->telefono_tecnico_externo}}</td>
                <td>{{ $ex->empresa}}</td>


              <td>

                <a href="{{route('externo.edit', $ex->idtecnico_externo)}}">
                <button type="button" class="btn btn-warning btn-sm" name="button"><span class="glyphicon glyphicon-cog"></span> </button>
                  </a>
                                



              </td>
            </tr>

            @endforeach
                  </tbody>
                  <tfoot>

                  </tfoot>
          </table>
          {!!$externos->appends(['searchText'=>request('searchText')])->links() !!}


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
  $('#liExternos').addClass("active");
  </script>
@endpush
@endsection

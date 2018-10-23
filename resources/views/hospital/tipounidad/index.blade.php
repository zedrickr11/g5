@extends ('layouts.admin')
@section ('contenido')
<section class="content-header">
      <h1>
        Hospital
        <small>Tipos de unidades de salud</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-medkit"></i> Tipo de unidad</a></li>
        <li class="active">Listado</li>
      </ol>
	</section>
	<section class="content">


<div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Listado de tipos de unidades de salud <a href="{{route('tipounidad.create')}}"><button class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></button></a>
                  </h3>


            </div>
            <!-- /.box-header -->
            <div class="box-body">
              @include('hospital.tipounidad.search')
                <div class="col-md-12">
              <div class="table-responsive">
                <table  class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Nivel de atención</th>
                    <th>Categoría</th>
                    <th>Complejidad </th>
                    <th>Unidad medica</th>
                    <th>Hospital</th>
                    <th>Opciones</th>
                  </tr>
                  </thead>
                  <tbody>
            @foreach ($tipos as $ti)
            <tr>
              <td>{{ $ti->idtipounidad}}</td>
              <td>{{ $ti->nivel_atencion}}</td>
              <td>{{ $ti->categoria}}</td>
                <td>{{ $ti->comp_res}}</td>
                  <td>{{ $ti->unidad_medica}}</td>
              <td>{{ $ti->hospi}}</td>

              <td>

                <a href="{{route('tipounidad.edit',$ti->idtipounidad)}}">
                <button type="button" class="btn btn-warning btn-sm" name="button"><span class="glyphicon glyphicon-cog"></span> </button>
                </a>
                <a href="{{route('tipounidad.show',$ti->idtipounidad)}}">
                <button type="button" class="btn btn-info btn-sm" name="button"><span class="glyphicon glyphicon-info-sign"></span></button>
                                                  </a>

                                                  <!--
                                                  <form style="display: inline" method="POST" action="{{route('tipounidad.destroy', $ti->idtipounidad)}}">
                                                  {!!method_field('DELETE')!!}
                                                  {!!csrf_field()!!}
                <button type="submit" class="btn btn-danger btn-sm" name="button"><span class="glyphicon glyphicon-trash"></span> </button>
                </form>
-->

              </td>
            </tr>

            @endforeach
                  </tbody>
                  <tfoot>

                  </tfoot>
          </table>
          {!!  $tipos->appends(['searchText'=>request('searchText')])->links() !!}

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
$('#liRegiones').addClass("treeview active");


$('#liTipo').addClass("active");

</script>

@endpush
@endsection

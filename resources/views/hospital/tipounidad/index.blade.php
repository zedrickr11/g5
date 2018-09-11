@extends ('layouts.admin')
@section ('contenido')
<section class="content-header">
      <h1>
        Hospital
        <small>Tipos de Unidades de Salud</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-tv"></i> Tipo de Unidad</a></li>
        <li class="active">Listado</li>
      </ol>
	</section>
	<section class="content">


<div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="box">
            <div class="box-header">
			  <h3 class="box-title">Listado deTipos de Unidades de Salud <a href="tipounidad/create"><button class="btn btn-success">Nuevo</button></a>
			  		<a href="#" target="_blank"><button class="btn btn-info">Reporte</button></a></h3>
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
                    <th>Nivel de Atencion</th>
                    <th>Categoria</th>
                    <th>Comp</th>
                    <th>Unidad Medica</th>
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
                    <button type="button" class="btn btn-warning btn-sm" name="button">Editar</button>
                  </a>
                  <a href="{{route('tipounidad.show',$ti->idtipounidad)}}">
                    <button type="button" class="btn btn-info btn-sm" name="button">Detalles</button>
                  </a>
                  <form style="display: inline" method="POST" action="{{route('tipounidad.destroy', $ti->idtipounidad)}}">
                  {!!method_field('DELETE')!!}
                  {!!csrf_field()!!}
                    <button type="submit" class="btn btn-danger btn-sm" name="button">Eliminar</button>
                  </form>


              </td>
            </tr>

            @endforeach
                  </tbody>
                  <tfoot>

                  </tfoot>
          </table>
            {!! $tipos->links() !!}
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

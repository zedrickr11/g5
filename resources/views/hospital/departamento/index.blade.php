@extends ('layouts.admin')
@section ('contenido')
<section class="content-header">
      <h1>
        Hospital
        <small>Departamentos</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-tv"></i> Departamento</a></li>
        <li class="active">Listado</li>
      </ol>
	</section>
	<section class="content">


<div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="box">
            <div class="box-header">
			  <h3 class="box-title">Listado de Departamentos<a href="departamento/create"><button class="btn btn-success">Nuevo</button></a>
			  		<a href="#" target="_blank"><button class="btn btn-info">Reporte</button></a></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              @include('hospital.departamento.search')
                <div class="col-md-12">
              <div class="table-responsive">
                <table  class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Departamento</th>
                    <th>Hospital</th>
                    <th>Region</th>
                    <th>Opciones</th>
                  </tr>
                  </thead>
                  <tbody>
            @foreach ($departamentos as $dep)
            <tr>
              <td>{{ $dep->iddepartamento}}</td>
              <td>{{ $dep->depto}}</td>
              <td>{{ $dep->hospi}}</td>
              <td>{{ $dep->regi}}</td>

              <td>

                  <a href="{{route('departamento.edit',$dep->iddepartamento)}}">
                    <button type="button" class="btn btn-warning btn-sm" name="button">Editar</button>
                  </a>
                  <a href="{{route('departamento.show',$dep->iddepartamento)}}">
                    <button type="button" class="btn btn-info btn-sm" name="button">Detalles</button>
                  </a>
                  <form style="display: inline" method="POST" action="{{route('departamento.destroy', $dep->iddepartamento)}}">
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
          {!! $departamentos->links() !!}

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

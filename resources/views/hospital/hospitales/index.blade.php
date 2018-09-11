@extends ('layouts.admin')
@section ('contenido')
<section class="content-header">
      <h1>
        Hospital
        <small>Hospitales</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-tv"></i> Hospitales</a></li>
        <li class="active">Listado</li>
      </ol>
	</section>
	<section class="content">


<div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="box">
            <div class="box-header">
			  <h3 class="box-title">Listado de Hospitales <a href="hospitales/create"><button class="btn btn-success">Nuevo</button></a>
			  		<a href="#" target="_blank"><button class="btn btn-info">Reporte</button></a></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              @include('hospital.hospitales.search')
                <div class="col-md-12">
              <div class="table-responsive">
                <table  class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Hospital</th>
                    <th>Clave</th>
                        <th>Opciones</th>
                  </tr>
                  </thead>
                  <tbody>
            @foreach ($hospitales as $hos)
            <tr>
              <td>{{ $hos->idhospital}}</td>
              <td>{{ $hos->hospital}}</td>
              <td>{{ $hos->clave_admin}}</td>

              <td>

                  <a href="{{route('hospitales.edit',$hos->idhospital)}}">
                    <button type="button" class="btn btn-warning btn-sm" name="button">Editar</button>
                  </a>
                  <a href="{{route('hospitales.show',$hos->idhospital)}}">
                    <button type="button" class="btn btn-info btn-sm" name="button">Detalles</button>
                  </a>
                  <form style="display: inline" method="POST" action="{{route('hospitales.destroy', $hos->idhospital)}}">
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
          {!! $hospitales->links() !!}

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

@extends ('layouts.admin')
@section ('contenido')
<section class="content-header">
      <h1>
        Equipo
        <small>Detalle caracteristica tecnica</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-tv"></i> Equipo</a></li>
          <li class="active">Caracteristica</li>
        <li class="active">Detalle tecnica</li>
      </ol>
	</section>
	<section class="content">


<div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="box">
            <div class="box-header">
			  <h3 class="box-title">Listado de detalle caracteristica tecnica <a href="detcaractec/create"><button class="btn btn-success">Nuevo</button></a>
			  </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table  class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Caracteristica tecnica</th>
                    <th>Equipo</th>
                    <th>Valor referencia tecnica</th>
                    <th>Subgrupo caracteristica tecnica</th>
                    <th>Estado detalle caracteristica tecnica</th>
                    <th>Descripcion detalle caracteristica tecnica</th>
                    <th>Valor detalle caracteristica tecnica</th>
                    <th>Opciones</th>
                  </tr>
                  </thead>
                  <tbody>
            @foreach ($detcaractec as $cat)
            <tr>
              <td>{{ $cat->idcaracteristica_tecnica}}</td>
              <td>{{ $cat->idequipo}}</td>
              <td>{{ $cat->idvalor_ref_tec}}</td>
              <td>{{ $cat->idsubgrupo_carac_tecnica}}</td>
              <td>{{ $cat->estado_detalle_caracteristica_tecnica}}</td>
              <td>{{ $cat->descripcion_detalle_caracteristica_tecnica}}</td>
              <td>{{ $cat->valor_detalle_caracteristica_tecnica}}</td>
              <td>

                  <a href="{{route('detcaractec.edit',$cat->idcaracteristica_tecnica)}}">
                    <button type="button" class="btn btn-warning btn-sm" name="button">Editar</button>
                  </a>
                  <a href="{{route('detcaractec.show',$cat->idcaracteristica_tecnica)}}">
                    <button type="button" class="btn btn-info btn-sm" name="button">Detalles</button>
                  </a>
                  <form style="display: inline" method="POST" action="{{route('detcaractec.destroy', $cat->idsubgrupo_carac_tecnica)}}">
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

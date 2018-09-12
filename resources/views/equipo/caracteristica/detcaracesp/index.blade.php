@extends ('layouts.admin')
@section ('contenido')
<section class="content-header">
      <h1>
        Equipo
        <small>Detalle caracteristica especial</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-tv"></i> Equipo</a></li>
          <li class="active">Caracteristica</li>
        <li class="active">Detalle especial</li>
      </ol>
	</section>
	<section class="content">


<div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="box">
            <div class="box-header">
			  <h3 class="box-title">Listado de detalle caracteristica especial <a href="detcaracesp/create"><button class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> </button></a>
			  		<a href="#" target="_blank"><button class="btn btn-info"><span class="glyphicon glyphicon-print"></span> </button></a></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table  class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Caracteristica especial</th>
                    <th>Equipo</th>
                    <th>Valor referencia especial</th>
                    <th>Estado detalle caracteristica especial</th>
                    <th>Descripcion detalle caracteristica especial</th>
                    <th>Valor detalle caracteristica especial</th>
                    <th>Opciones</th>
                  </tr>
                  </thead>
                  <tbody>
            @foreach ($detcaracesp as $cat)
            <tr>
              <td>{{ $cat->idcaracteristica_especial}}</td>
              <td>{{ $cat->idequipo}}</td>
              <td>{{ $cat->idvalor_ref_esp}}</td>
              <td>{{ $cat->estado_detalle_caracteristica_especial}}</td>
              <td>{{ $cat->descripcion_detalle_caracteristica_especial}}</td>
              <td>{{ $cat->valor_detalle_caracteristica_especial}}</td>
              <td>

                  <a href="{{route('detcaracesp.edit',$cat->idcaracteristica_especial)}}">
                    <button type="button" class="btn btn-warning btn-sm" name="button"><span class="glyphicon glyphicon-cog"></button>
                  </a>
                  <a href="{{route('detcaractec.show',$cat->idcaracteristica_especial)}}">
                    <button type="button" class="btn btn-info btn-sm" name="button"><span class="glyphicon glyphicon-info-sign"></button>
                  </a>
                  <form style="display: inline" method="POST" action="{{route('detcaracesp.destroy', $cat->idsubgrupo_carac_tecnica)}}">
                  {!!method_field('DELETE')!!}
                  {!!csrf_field()!!}
                    <button type="submit" class="btn btn-danger btn-sm" name="button"><span class="glyphicon glyphicon-cog"></button>
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

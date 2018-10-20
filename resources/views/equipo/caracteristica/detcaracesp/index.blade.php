@extends ('layouts.admin')
@section ('contenido')
<section class="content-header">
      <h1>
        Ficha Técnica
      <small>Características</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-edit"></i>   Ficha Técnica</a></li>
      <li class="active">Características</li>
      </ol>
	</section>
	<section class="content">


<div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="box">
            <div class="box-header">
			  <h3 class="box-title"><a href="{{route('actualizar',$nombre->idequipo)}}">
          <button type="button" name="atras" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> </button>
        </a>Características del equipo:  {{ $nombre->nombre_equipo }}</h3></div>
            <!-- /.box-header -->
            <div class="box-body">



                <h2>Características técnicas</h2>
              <div class="table-responsive">
                <table  class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Caracteristica </th>
                    <th>Subgrupo</th>
                    <th>Valor de referencia</th>
                     <th>Descripción</th>
                     <th>Valor</th>
                    <th>Opciones</th>
                  </tr>
                  </thead>
                  <tbody>
            @foreach ($detcaractec as $cat)
            <tr>
              <td>{{ $cat->nombre_caracteristica_tecnica}}</td>
              <td>{{ $cat->nombre_subgrupo_carac_tecnica }}</td>
              <td>{{ $cat->nombre_valor_ref_tec}}</td>
              <td>{{ $cat->descripcion_detalle_caracteristica_tecnica}}</td>
              <td>{{ $cat->valor_detalle_caracteristica_tecnica}}</td>
              <td>


                  <form style="display: inline" method="POST" action="{{route('detcaractec.destroy', $cat->iddetalle_caracteristica_tecnica)}}">
                  {!!method_field('DELETE')!!}
                  {!!csrf_field()!!}
                    <button type="submit" class="btn btn-danger btn-sm" name="button"><span class="glyphicon glyphicon-trash"></button>
                  </form>


              </td>
            </tr>

            @endforeach
                  </tbody>
                  <tfoot>

                  </tfoot>
          </table>
              </div>
              <hr>
              <h2>Características especiales de funcionamiento</h2>
            <div class="table-responsive">
              <table  class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Caracteristica </th>

                  <th>Valor de referencia</th>
                   <th>Descripción</th>
                   <th>Valor</th>
                  <th>Opciones</th>
                </tr>
                </thead>
                <tbody>
          @foreach ($detcaracesp as $cat)
          <tr>
            <td>{{ $cat->idcaracteristica_especial}}</td>

            <td>{{ $cat->idvalor_ref_esp}}</td>
            <td>{{ $cat->descripcion_detalle_caracteristica_especial}}</td>
            <td>{{ $cat->valor_detalle_caracteristica_especial}}</td>
            <td>


                <form style="display: inline" method="POST" action="{{route('detcaracesp.destroy', $cat->iddetalle_caracteristica_especial)}}">
                {!!method_field('DELETE')!!}
                {!!csrf_field()!!}
                  <button type="submit" class="btn btn-danger btn-sm" name="button"><span class="glyphicon glyphicon-trash"></button>
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

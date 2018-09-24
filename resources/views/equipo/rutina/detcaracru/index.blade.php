@extends ('layouts.admin')
@section ('contenido')
<section class="content-header">
      <h1>
        Equipo
        <small>Detalle caracteristica rutina</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-tv"></i> Equipo</a></li>
          <li class="active">Detalle caracteristica rutina</li>
        <li class="active">Detalle especial</li>
      </ol>
	</section>
	<section class="content">


<div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="box">
            <div class="box-header">
			  <h3 class="box-title">Listado de detalle caracteristica rutina <a href="detcaracru/create"><button class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> </button></a>
			  		<a href="#" target="_blank"><button class="btn btn-info"><span class="glyphicon glyphicon-print"></span> </button></a></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              @include('equipo.rutina.detcaracru.search')
                <br>
                <br>
                <br>
              <div class="table-responsive">
                <table  class="table table-bordered table-striped">
                  <thead>
                  <tr>

                    <th>Caracteristica rutina</th>
                    <th>Rutina mantenimiento</th>
                    <th>Valor referencia rutina</th>
                    <th>Subgrupo rutina</th>
                    <th>Estado detalle caracteristica rutina</th>
                    <th>Fecha detalle caracteristica rutina</th>
                    <th>Comentario detalle caracteristica rutina</th>
                    <th>Opciones</th>
                  </tr>
                  </thead>
                  <tbody>
            @foreach ($detcaracru as $cat)
            <tr>

              <td>{{ $cat->idcaracteristica_rutina}}</td>
              <td>{{ $cat->idrutina_mantenimiento}}</td>
              <td>{{ $cat->idvalor_ref_rutina}}</td>
              <td>{{ $cat->idsubgrupo_rutina}}</td>
              <td>{{ $cat->estado_detalle_caracteristica_rutina}}</td>
              <td>{{ $cat->fecha_detalle_caracteristica_rutina}}</td>
              <td>{{ $cat->comentario_detalle_caracteristica_rutina}}</td>
              <td>

                  <a href="{{route('detcaracru.edit',$cat->idcaracteristica_rutina)}}">
                    <button type="button" class="btn btn-warning btn-sm" name="button"><span class="glyphicon glyphicon-cog"></button>
                  </a>
                  <a href="{{route('detcaracru.show',$cat->idcaracteristica_rutina)}}">
                    <button type="button" class="btn btn-info btn-sm" name="button"><span class="glyphicon glyphicon-info-sign"></button>
                  </a>
                  <form style="display: inline" method="POST" action="{{route('detcaracru.destroy', $cat->idcaracteristica_rutina)}}">
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
{!! $detcaracru->links() !!}
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

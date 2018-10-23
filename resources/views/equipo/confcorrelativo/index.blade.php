@extends ('layouts.admin')
@section ('contenido')
<section class="content-header">
      <h1>
        Equipo
        <small>Configuración de los correlativos</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-tv"></i> Equipo</a></li>
        <li class="active">Configuración de los correlativos</li>
      </ol>
 </section>
 <section class="content">


<div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="box">
            <div class="box-header">
       <h3 class="box-title">Listado de Configuración de los correlativos <a href="confcorrelativo/create"><button class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></button></a>
        <!--   <a href="#" target="_blank"><button class="btn btn-info"><span class="glyphicon glyphicon-print"></span> </button></a>--></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              @include('equipo.confcorrelativo.search')
          <div class="col-md-12">
            <div class="table-responsive">
              <table  class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Subrupo</th>
                  <th>Inicio</th>
                  <th>Fin</th>
                  <th>Actual</th>
                  <th>Estado</th>
                  <th>Opciones</th>
                </tr>
                </thead>
                <tbody>
          @foreach ($confcorrelativo as $confsub)
          <tr>
            <td>{{ $confsub->subgrupo }}</td>
            <td>{{ $confsub->inicio }}</td>
            <td>{{ $confsub->fin }}</td>
            <td>{{ $confsub->actual }}</td>
            <td>
              @if ($confsub->estado==1)
                <input type="checkbox" checked disabled>
              @else
                <input type="checkbox" disabled>
              @endif


            </td>


            <td>

                <a href="{{route('confcorrelativo.edit',$confsub->idconf_corr)}}">
                  <button type="button" class="btn btn-warning btn-sm" name="button"><span class="glyphicon glyphicon-cog"></span></button>
                </a>
                <a href="{{route('confcorrelativo.show',$confsub->idconf_corr)}}">
                  <button type="button" class="btn btn-info btn-sm" name="button"><span class="glyphicon glyphicon-info-sign"></span></button>
                </a>
              <!--  <form style="display: inline" method="POST" action="{{route('confcorrelativo.destroy', $confsub->idconf_corr)}}">
                {!!method_field('DELETE')!!}
                {!!csrf_field()!!}
                  <button type="submit" class="btn btn-danger btn-sm" name="button"><span class="glyphicon glyphicon-trash"></span> </button>
                </form> -->


            </td>
          </tr>

          @endforeach
                </tbody>
                <tfoot>

                </tfoot>
        </table>
          {!! $confcorrelativo->links() !!}
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
$('#liAreas').addClass("treeview active");
$('#liConfcorr').addClass("active");
</script>

@endpush
@endsection

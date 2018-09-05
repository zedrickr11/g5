@extends ('layouts.admin')
@section ('contenido')
<section class="content-header">
      <h1>
        Equipo
        <small>Configuración de los subgrupos</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-tv"></i> Equipo</a></li>
        <li class="active">Configuración de los subgrupos</li>
      </ol>
 </section>
 <section class="content">


<div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="box">
            <div class="box-header">
       <h3 class="box-title">Listado de Configuración de los subgrupos <a href="confsubgrupo/create"><button class="btn btn-success">Nuevo</button></a>
           </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              @include('equipo.confsubgrupo.search')
          <div class="col-md-12">
            <div class="table-responsive">
              <table  class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Grupo</th>
                  <th>Inicio</th>
                  <th>Fin</th>
                  <th>Actual</th>
                  <th>Estado</th>
                  <th>Opciones</th>
                </tr>
                </thead>
                <tbody>
          @foreach ($confsubgrupos as $confsub)
          <tr>
            <td>{{ $confsub->grupo }}</td>
            <td>{{ $confsub->inicio }}</td>
            <td>{{ $confsub->fin }}</td>
            <td>{{ $confsub->actual }}</td>
            <td>{{ $confsub->estado }}</td>


            <td>

                <a href="{{route('confsubgrupo.edit',$confsub->idconf_subgrupo)}}">
                  <button type="button" class="btn btn-warning btn-sm" name="button">Editar</button>
                </a>
                <a href="{{route('confsubgrupo.show',$confsub->idconf_subgrupo)}}">
                  <button type="button" class="btn btn-info btn-sm" name="button">Detalles</button>
                </a>
                <form style="display: inline" method="POST" action="{{route('confsubgrupo.destroy', $confsub->idconf_subgrupo)}}">
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

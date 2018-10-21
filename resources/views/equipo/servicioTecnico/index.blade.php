@extends ('layouts.admin')
@section ('contenido')
<section class="content-header">
      <h1>
        Equipo
        <small>Servicio Tecnico</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-tv"></i> Equipo</a></li>
        <li class="active">Servicio Tecnico</li>
      </ol>
	</section>
	<section class="content">


<div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="box">
            <div class="box-header">
			  <h3 class="box-title">Listado de Servicios Tecnicos <a href="servicioTecnico/create"><button class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> </button></a>


          <!--	<a href="#" target="_blank"><button class="btn btn-info"><span class="glyphicon glyphicon-print"></span> </button></a>
          -->
          </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              @include('equipo.servicioTecnico.search')
              <div class="col-md-12">
                <div class="table-responsive">
                  <table  class="table table-bordered table-striped">
                    <thead>
                    <tr>
                    <th>Id</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>Fax</th>
                    <th>Correo Electronico</th>
                    <th>Nombre de Contacto</th>
                    <th>Nombre de Empresa</th>
                    <th>Opciones</th>
                  </tr>
                    </thead>
                    <tbody>
              @foreach ($servicioTecnicos as $ser)
            <tr>
              <td>{{ $ser->idservicio_tecnico}}</td>
              <td>{{ $ser->direccion_servicio_tecnico}}</td>
              <td>{{ $ser-> telefono_servicio_tecnico}}</td>
              <td>{{ $ser->fax_servicio_tecnico}}</td>
              <td>{{ $ser->correo_servicio_mantenimiento}}</td>
              <td>{{ $ser->nombre_contacto_servicio_tecnico}}</td>
              <td>{{ $ser->nombre_empresa_sevicio_tecnico}}</td>
              <td>

                    <a href="{{route('servicioTecnico.edit',$ser->idservicio_tecnico)}}">
                      <button type="button" class="btn btn-warning btn-sm" name="button"><span class="glyphicon glyphicon-cog"></span> </button>
                    </a>
                    <a href="{{route('servicioTecnico.show',$ser->idservicio_tecnico)}}">
                      <button type="button" class="btn btn-info btn-sm" name="button"><span class="glyphicon glyphicon-info-sign"></span> </button>
                    </a>
                    <!--<form style="display: inline" method="POST" action="{{route('servicioTecnico.destroy', $ser->idservicio_tecnico)}}">
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
            {!! $servicioTecnicos->links() !!}
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

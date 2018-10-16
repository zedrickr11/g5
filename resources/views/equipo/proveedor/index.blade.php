@extends ('layouts.admin')
@section ('contenido')
<section class="content-header">
      <h1>
        Equipo
        <small>Proveedor</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-tv"></i> Equipo</a></li>
        <li class="active">Proveedor</li>
      </ol>
	</section>
	<section class="content">


<div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="box">
            <div class="box-header">

			  <h3 class="box-title">Listado de Proveedores <a href="proveedor/create"><button class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></button></a>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
              @include('equipo.proveedor.search')
                <div class="col-md-12">
              <div class="table-responsive">
                <table  class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                    <th>Fax</th>
                    <th>Correo electrónico</th>
                    <th>Contacto</th>

                    <th>Opciones</th>
                  </tr>
                  </thead>
                  <tbody>
            @foreach ($proveedores as $pro)
            <tr>
              <td>{{ $pro->id_proveedor}}</td>
              <td>{{ $pro->direccion_proveedor}}</td>
              <td>{{ $pro->telefono_proveedor}}</td>
              <td>{{ $pro->fax_proveedor}}</td>
              <td>{{ $pro->correo_proveedor}}</td>
              <td>{{ $pro->contacto_proveedor}}</td>

              <td>


                  <a href="{{route('proveedor.edit',$pro->id_proveedor)}}">
                  <button type="button" class="btn btn-warning btn-sm" name="button"><span class="glyphicon glyphicon-cog"></span> </button>
                  </a>
                      <a href="{{route('proveedor.show',$pro->id_proveedor)}}">
                  <button type="button" class="btn btn-info btn-sm" name="button"><span class="glyphicon glyphicon-info-sign"></span></button>
                                                    </a>
                                                    <form style="display: inline" method="POST" action="{{route('proveedor.destroy', $pro->id_proveedor)}}">
                                                    {!!method_field('DELETE')!!}
                                                    {!!csrf_field()!!}
                  <button type="submit" class="btn btn-danger btn-sm" name="button"><span class="glyphicon glyphicon-trash"></span> </button>
                  </form>


              </td>
            </tr>

            @endforeach
                  </tbody>
                  <tfoot>

                  </tfoot>
          </table>
                    {!! $proveedores->links() !!}
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

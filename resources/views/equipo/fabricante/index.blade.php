@extends ('layouts.admin')
@section ('contenido')
  <div class="ajax-content">

<section class="content-header">
      <h1>
        Equipo
        <small>Fabricante</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-tv"></i> Equipo</a></li>
        <li class="active">Fabricante</li>
      </ol>
	</section>
	<section class="content">


<div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="box">
            <div class="box-header">
			  <h3 class="box-title">Listado de Fabricantes <a href="fabricante/create"><button class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> </button></a>
			  		<a href="#" target="_blank"><button class="btn btn-info"><span class="glyphicon glyphicon-print"></span> </button></a></h3>
            </div>

            <!-- /.box-header -->
            <div class="box-body">
              @include('equipo.fabricante.search')
              <div class="col-md-12">
                <div class="table-responsive">
                  <table id="tabla" class="table table-bordered table-striped">
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
              @foreach ($fabricantes as $fab)
              <tr>
                <td>{{ $fab->idfabricante}}</td>
                <td>{{ $fab->direccion_fabricante}}</td>
                <td>{{ $fab->telefono_fabricante}}</td>
                <td>{{ $fab->fax_fabricante}}</td>
                <td>{{ $fab->correo_fabricante}}</td>
                <td>{{ $fab->contacto_fabricante}}</td>

                <td>

                    <a href="{{route('fabricante.edit',$fab->idfabricante)}}">
                      <button type="button" class="btn btn-warning btn-sm" name="button"><span class="glyphicon glyphicon-cog"></span> </button>
                    </a>
                    <a href="{{route('fabricante.show',$fab->idfabricante)}}">
                      <button type="button" class="btn btn-info btn-sm" name="button"><span class="glyphicon glyphicon-info-sign"></span> </button>
                    </a>
                    <form style="display: inline" method="POST" action="{{route('fabricante.destroy', $fab->idfabricante)}}">
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
            {!! $fabricantes->appends(['searchText'=>request('searchText')])->links() !!}
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

</div>
<script src="{{asset('bower_components/PACE/pace.min.js')}}"></script>
<!-- jQuery 3 -->
<script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- DataTables -->
<script src="{{asset('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

@endsection

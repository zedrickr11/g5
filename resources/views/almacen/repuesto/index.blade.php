@extends ('layouts.admin')
@section ('contenido')
<section class="content-header">
      <h1>
        Almacén
        <small>Repuestos</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-tv"></i> Almacén</a></li>
        <li class="active">Repuestos</li>
      </ol>
	</section>
	<section class="content">


<div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="box">
            <div class="box-header">
			  <h3 class="box-title">Listado de Repuestos  <a href="repuesto/create"><button class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></button></a>

          <!--  <a href="#" target="_blank"><button class="btn btn-info"><span class="glyphicon glyphicon-print"></span> </button></a>--></h3>
          	</h3>  </div>
            <!-- /.box-header -->
            <div class="box-body">
                @include('almacen.repuesto.search')
                <div class="col-md-12">
                  <div class="table-responsive">
                    <table  class="table table-bordered table-striped">
											<thead>
												<th>Nombre</th>
                        <th>Serie</th>
                        <th>Modelo</th>
												<th>Código</th>
												<th>Stock</th>
                        <th>Equipo</th>
												<th>Estado</th>
												<th>Opciones</th>
											</thead>
							               @foreach ($repuestos as $art)
											<tr>

												<td>{{ $art->nombre}}</td>
                        <td>{{ $art->num_serie}}</td>
                        <td>{{ $art->modelo}}</td>
												<td>{{ $art->codigo}}</td>

												<td>{{ $art->stock}}</td>
                        <td>{{ $art->equipo }}</td>
												<td>{{ $art->estado}}</td>
												<td>
													<a href="{{URL::action('RepuestoController@edit',$art->idrepuesto)}}"><button type="button" class="btn btn-warning btn-sm" name="button"><span class="glyphicon glyphicon-cog"></span> </button></a>
												</td>
											</tr>
			
			 					@endforeach

                      </tbody>
                      <tfoot>

                      </tfoot>
              </table>
            {!! $repuestos->appends(['searchText'=>request('searchText')])->links() !!}
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
$('#liAlmacen').addClass("treeview active");


$('#liRepuestos').addClass("active");

</script>

@endpush
@endsection

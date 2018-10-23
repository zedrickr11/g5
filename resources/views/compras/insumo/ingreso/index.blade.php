@extends ('layouts.admin')
@section ('contenido')
<section class="content-header">
      <h1>
        Compras
        <small>Insumos</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-tv"></i> Compras</a></li>
        <li class="active">Insumos</li>
      </ol>
	</section>
	<section class="content">


<div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="box">
            <div class="box-header">
			  <h3 class="box-title">Listado de Ingresos de Insumos  <a href="insumo-ingreso/create"><button class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></button></a>
			  		</h3>
            <!--<a href="#" target="_blank"><button class="btn btn-info"><span class="glyphicon glyphicon-print"></span> </button></a>--></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                @include('compras.insumo.ingreso.search')
                <div class="col-md-12">
                  <div class="table-responsive">
                    <table  class="table table-bordered table-striped">
                      <thead>
              					<th>Fecha</th>
              					<th>Proveedor</th>
              					<th>Comprobante</th>
              					<th>Estado</th>
              					<th>Opciones</th>
              				</thead>
                             @foreach ($ingresos as $ing)
              				<tr>
              					<td>{{ $ing->fecha_hora}}</td>
              					<td>{{ $ing->nombre}}</td>
              					<td>{{ $ing->tipo_comprobante.'  '.$ing->serie_comprobante.' '.$ing->num_comprobante}}</td>
              					<td>{{ $ing->estado}}</td>
              					<td>
              						<a href="{{URL::action('Ingreso_insumoController@show',$ing->idingreso_insumo)}}"><button type="button" class="btn btn-info btn-sm" name="button"><span class="glyphicon glyphicon-info-sign"></span> </button></a>
              					</td>
              				</tr>
			 					@endforeach

                      </tbody>
                      <tfoot>

                      </tfoot>
              </table>
            {{$ingresos->render()}}
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
  $('#liCompras').addClass("treeview active");
  $('#liIngresosI').addClass("active");
  </script>
@endpush

@endsection

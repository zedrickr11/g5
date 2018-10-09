@extends ('layouts.admin')
@section ('contenido')
<section class="content-header">
      <h1>
        Compras
        <small>Repuestos</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-tv"></i> Compras</a></li>
        <li class="active">Repuestos</li>
      </ol>
	</section>
	<section class="content">


<div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="box">
            <div class="box-header">
			  <h3 class="box-title">Listado de Ingresos de Repuestos  <a href="repuesto-ingreso/create"><button class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></button></a>

            <a href="#" target="_blank"><button class="btn btn-info"><span class="glyphicon glyphicon-print"></span> </button></a></h3>
            </h3></div>
            <!-- /.box-header -->
            <div class="box-body">
                @include('compras.repuesto.ingreso.search')
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
              						<a href="{{URL::action('Ingreso_repuestoController@show',$ing->idingreso_repuesto)}}"><button type="button" class="btn btn-info btn-sm" name="button"><span class="glyphicon glyphicon-info-sign"></span> </button></a>
              						<a href="" data-target="#modal-delete-{{$ing->idingreso_repuesto}}" data-toggle="modal"><button type="submit" class="btn btn-danger btn-sm" name="button"><span class="glyphicon glyphicon-trash"></span> </button></a>
              					</td>
              				</tr>
			 					@include('compras.repuesto.ingreso.modal')
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
<script>
$('#liCompras').addClass("treeview active");
$('#liIngresos').addClass("active");
</script>
@endsection

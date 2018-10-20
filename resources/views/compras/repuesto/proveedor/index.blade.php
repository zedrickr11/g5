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
			  <h3 class="box-title">Listado de Proveedores de Repuestos  <a href="prov/create"><button class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></button></a>
			  		</h3>
          <!--  <a href="#" target="_blank"><button class="btn btn-info"><span class="glyphicon glyphicon-print"></span> </button></a>--></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                @include('compras.repuesto.proveedor.search')
                <div class="col-md-12">
                  <div class="table-responsive">
                    <table  class="table table-bordered table-striped">
                      <thead>
                      <tr>
												<th>Id</th>
												<th>Nombre</th>

												<th>Teléfono</th>
												<th>Email</th>
												<th>Opciones</th>
                      </tr>
                      </thead>
                      <tbody>
												@foreach ($prov_insumo as $per)
			 					<tr>
			 						<td>{{ $per->idproveedor_repuesto}}</td>
			 						<td>{{ $per->nombre}}</td>

			 						<td>{{ $per->telefono}}</td>
			 						<td>{{ $per->email}}</td>
			 						<td>
			 							<a href="{{URL::action('Proveedor_insumoController@edit',$per->idproveedor_repuesto)}}"><button type="button" class="btn btn-warning btn-sm" name="button"><span class="glyphicon glyphicon-cog"></span> </button></a>
			 	                         <a href="" data-target="#modal-delete-{{$per->idproveedor_repuesto}}" data-toggle="modal">  <button type="submit" class="btn btn-danger btn-sm" name="button"><span class="glyphicon glyphicon-trash"></span> </button></a>
			 						</td>
			 					</tr>
			 					@include('compras.repuesto.proveedor.modal')
			 					@endforeach

                      </tbody>
                      <tfoot>

                      </tfoot>
              </table>
            {{$prov_insumo->render()}}
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

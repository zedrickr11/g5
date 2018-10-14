@extends ('layouts.admin')
@section ('contenido')
<section class="content-header">
      <h1>
        Almacén
        <small>Insumos</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-tv"></i> Almacén</a></li>
        <li class="active">Insumos</li>
      </ol>
	</section>
	<section class="content">


<div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="box">
            <div class="box-header">
			  <h3 class="box-title">Listado de Insumos  <a href="insumo/create"><button class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></button></a>
			  		</h3>
            <a href="#" target="_blank"><button class="btn btn-info"><span class="glyphicon glyphicon-print"></span> </button></a></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                @include('almacen.insumo.search')
                <div class="col-md-12">
                  <div class="table-responsive">
                    <table  class="table table-bordered table-striped">
											<thead>
												<th>Id</th>
												<th>Nombre</th>
												<th>Código</th>
												<th>Stock</th>
                        <th>Unidad de medida</th>
												<th>Estado</th>
												<th>Opciones</th>
											</thead>
							               @foreach ($insumos as $art)
											<tr>
												<td>{{ $art->idinsumo}}</td>
												<td>{{ $art->nombre}}</td>
												<td>{{ $art->codigo}}</td>

												<td>{{ $art->stock}}</td>
                        <td>{{ $art->unidad_medida }}</td>
												<td>{{ $art->estado}}</td>
												<td>
													<a href="{{URL::action('InsumoController@edit',$art->idinsumo)}}"><button type="button" class="btn btn-warning btn-sm" name="button"><span class="glyphicon glyphicon-cog"></span> </button></a>
							                         <a href="" data-target="#modal-delete-{{$art->idinsumo}}" data-toggle="modal"><button type="submit" class="btn btn-danger btn-sm" name="button"><span class="glyphicon glyphicon-trash"></span> </button></a>
												</td>
											</tr>
			 					@include('almacen.insumo.modal')
			 					@endforeach

                      </tbody>
                      <tfoot>

                      </tfoot>
              </table>
            {{$insumos->render()}}
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

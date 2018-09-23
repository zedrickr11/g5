@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
  <h1>
    Precaucion
    <small>Precaucion Ejecutante</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-exclamation-triangle"></i> Precaucion</a></li>
    <li class="active">Ejecutante</li>
  </ol>
</section>
	<section class="content">
<div class="row">
	<!-- left column -->
	<div class="col-md-12">
		<!-- general form elements -->
		<div class="box box-success">
			<div class="box-header with-border">
				<h3 class="box-title">Detalles</h3>
			</div>
			<!-- /.box-header -->
			<!-- form start -->


				<div class="box-body col-md-12">
					<div class="form-group">
						<label for="direccion_fab">Codigo de Precaucion</label>
            <p>{{$ejecutantes->idprecaucion_ejecutante}}</p>
					</div>
					<div class="form-group">
						<label for="telefono_fab">Precaucion</label>
            <p>{{$ejecutantes->precaucion_ejecutante}}</p>
					</div>



				</div>

				<!-- /.box-body -->

				<div class="box-footer">

          <a href="{{route('ejecutante.index')}}">
            <button type="button" name="atras" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> </button>
          </a>
				</div>

		</div>
		<!-- /.box -->


	</div>

</div>
</section>
@endsection

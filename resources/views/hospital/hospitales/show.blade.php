@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
      <h1>
        Hospital
        <small>Hospitales</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-hospital-o"></i> Hospital</a></li>
        <li class="active">Detalles</li>
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
						<label for="direccion_fab">Id</label>
            <p>{{$hospitales->idhospital}}</p>
					</div>
          <div class="form-group">
            <label for="telefono_fab">Hospital</label>
            <p>{{$hospitales->hospital}}</p>
          </div>
          <div class="form-group">
						<label for="telefono_fab">Clave administrador</label>
            <p>{{$hospitales->clave_admin}}</p>
					</div>



				</div>

				<!-- /.box-body -->

				<div class="box-footer">

          <a href="{{route('hospitales.index')}}">
            <button type="button" name="atras" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> </button>
          </a>
				</div>

		</div>
		<!-- /.box -->


	</div>

</div>
</section>
@push ('scripts')
<script>
$('#liRegiones').addClass("treeview active");


$('#liHospi').addClass("active");

</script>
@endpush
@endsection

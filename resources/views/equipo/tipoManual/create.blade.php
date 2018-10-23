@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
      <h1>
        Equipo
        <small>Tipo de Manual</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-tv"></i> Equipo</a></li>
        <li class="active">Tipo de Manual</li>
      </ol>
</section>
	<section class="content">
<div class="row">
	<!-- left column -->
	<div class="col-md-12">
		<!-- general form elements -->
		<div class="box box-success">
			<div class="box-header with-border">
				<h3 class="box-title">Nuevo Tipo de Manual</h3>
			</div>
			<!-- /.box-header -->
			<!-- form start -->
			<form role="form" method="POST" action="{{route('tipoManual.store')}}" >
					{!! csrf_field() !!}

				<div class="box-body col-md-6">
					<div class="form-group">
						<label for="tip">Nombre de Manual</label>
						<input type="text" class="form-control" name="nombre_tipo_manual" value="{{old('nombre_tipo_manual')}}">
					</div>
				</div>
				<!-- /.box-body --><br><br><br><br><br>
				<div class="box-footer">
					<a href="{{route('tipoManual.index')}}">
		            <button type="button" name="atras" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> </button>
		          	</a>
		          	<button class="btn btn-danger" type="reset"><span class="glyphicon glyphicon-remove"></span> </button>
		          	<button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-ok"></span> </button>
				</div>
			</form>
		</div>
		<!-- /.box -->
	</div>
</div>
</section>
@push ('scripts')
<script>
$('#liEq').addClass("treeview active");

$('#liManuales').addClass("active");

</script>
@endpush
@endsection

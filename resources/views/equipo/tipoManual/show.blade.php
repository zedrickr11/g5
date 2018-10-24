@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
      <h1>
        Equipo
        <small>Tipo de manual</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-tv"></i> Equipo</a></li>
        <li class="active">Tipo de manual</li>
      </ol>
</section>
	<section class="content">
<div class="row">
	<!-- left column -->
	<div class="col-md-12">
		<!-- general form elements -->
		<div class="box box-success">
			<div class="box-header with-border">
				<h3 class="box-title">Detalle de tipo de manual</h3>
			</div>
			<!-- /.box-header -->
			<!-- form start -->

				<div class="box-body col-md-6">
					<div class="form-group">
						<label for="est">Tipo de manual</label>
            <p>{{$tipoManuals->nombre_tipo_manual}}</p>
					</div>
				</div>
				<!-- /.box-body -->
				<br><br><br><br><br>
				<div class="box-footer">
					<a href="{{route('tipoManual.index')}}">
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
$('#liEq').addClass("treeview active");

$('#liManuales').addClass("active");

</script>
@endpush
@endsection

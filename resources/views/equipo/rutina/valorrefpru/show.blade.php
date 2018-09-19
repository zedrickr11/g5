@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
      <h1>
        Equipo
        <small>Valor referencia prueba</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-tv"></i> Equipo</a></li>
        <li class="active">Valor referencia prueba</li>
      </ol>
</section>
	<section class="content">
<div class="row">
	<!-- left column -->
	<div class="col-md-12">
		<!-- general form elements -->
		<div class="box box-success">
			<div class="box-header with-border">
				<h3 class="box-title">Nuevo valor referencia prueba</h3>
			</div>
			<!-- /.box-header -->
			<!-- form start -->


				<div class="box-body col-md-6">
					<div class="form-group">
						<label for="direccion_fab">Nombre valor referencia prueba</label>
            <p>{{$valorrefpru->descripcion}}</p>
					</div>



				</div>

				<!-- /.box-body -->

        <div class="box-footer">
<br>
<br>
<br>
<br>
          <a href="{{route('valorrefpru.index')}}">
            <button type="button" name="atras" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> </button>
          </a>
        </div>

		</div>
		<!-- /.box -->


	</div>

</div>
</section>
@endsection
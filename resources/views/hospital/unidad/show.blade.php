@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
      <h1>
        Hospital
        <small>Unidades de Salud</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-tv"></i> Unidad de salud</a></li>
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
						<label for="codigo">Código de unidad de salud</label>
            <p>{{$unidades->idunidadsalud}}</p>
					</div>
					<div class="form-group">
						<label for="unidad">Unidad de salud</label>
            <p>{{$unidades->unidad_salud}}</p>
					</div>

          <div class="form-group">
            <label for="direccion_fab">Hospital</label>
            <br>

     @foreach($hospitals as $hosp)
              @if ($hosp->idhospital==$unidades->idhospital)
              <p>{{$hosp->hospital}}</p>


            @endif
             @endforeach

          </div>



				</div>

				<!-- /.box-body -->

				<div class="box-footer">

          <a href="{{route('unidad.index')}}">
          <button type="button" name="atras" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> </button>
          </a>
				</div>

		</div>
		<!-- /.box -->


	</div>

</div>
</section>
@endsection

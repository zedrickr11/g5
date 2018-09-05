@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
      <h1>
        Equipo
        <small>Advertencias</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-tv"></i> Equipo</a></li>
        <li class="active">Advertencia</li>
          <li class="active">Mostrar</li>
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
						<label for="codigo">Codigo de la advertencia</label>
            <p>{{$advertencis->idadvertencia}}</p>
					</div>
					<div class="form-group">
						<label for="unidad">Nombre de la advertencia</label>
            <p>{{$advertencis->nombre_advertencia}}</p>
					</div>

          <div class="form-group">
            <label for="direccion_fab">Equipo</label>
            <br>

     @foreach($equipos as $eq)
              @if ($eq->idequipo==$advertencis->equipo_idequipo)
              <p>{{$eq->nombre_equipo}}</p>


            @endif
             @endforeach

          </div>



				</div>

				<!-- /.box-body -->

				<div class="box-footer">

					<a href="{{route('tipounidad.index')}}">
            <button type="button" name="atras" class="btn btn-warning">Atrás</button>
          </a>
				</div>

		</div>
		<!-- /.box -->


	</div>

</div>
</section>
@endsection

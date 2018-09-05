@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
      <h1>
        Equipo
        <small>Advertencia</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-tv"></i>Equipo</a></li>
        <li class="active">Advertencia</li>
        <li class="active">Ingresos</li>
      </ol>
</section>
	<section class="content">
<div class="row">
	<!-- left column -->
	<div class="col-md-12">
		<!-- general form elements -->
		<div class="box box-success">
			<div class="box-header with-border">
				<h3 class="box-title">Nueva Advertencia</h3>
			</div>
			<!-- /.box-header -->
			<!-- form start -->
			<form role="form" method="POST" action="{{route('advertencia.store')}}" >
					{!! csrf_field() !!}

				<div class="box-body col-md-12">
					<div class="form-group">
						<label for="direccion_fab">Codigo de la advertencia</label>
						<input type="text" class="form-control" name="idadvertencia" value="{{old('idadvertencia')}}">
					</div>
					<div class="form-group">
						<label for="telefono_fab">Nombre de la advertencia</label>
						<input type="text" class="form-control" name="nombre_advertencia" value="{{old('nombre_advertencia')}}">
					</div>
          <div class="form-group">
						<label for="telefono_fab">Nivel de la advertencia</label>
						<input type="text" class="form-control" name="valor_advertencia" value="{{old('valor_advertencia')}}">
					</div>



          <div class="form-group">
    <label for="select" class="col-lg-2 control-label">Equipo</label>

      <select name="equipo_idequipo" class="form-control" id="select">
     @foreach($equipos as $eq)
            <option value="{{$eq->idequipo}}">{{$eq->nombre_equipo}}</option>
             @endforeach
      </select>



  </div>



				</div>

				<!-- /.box-body -->

				<div class="box-footer">

					<input class="btn btn-primary" type="submit" name="" value="Guardar">
				</div>
			</form>
		</div>
		<!-- /.box -->


	</div>

</div>
</section>
@endsection

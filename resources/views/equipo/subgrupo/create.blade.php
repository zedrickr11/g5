@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
      <h1>
        Equipo
        <small>Subgrupo</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-tv"></i> Equipo</a></li>
        <li class="active">Subgrupo</li>
      </ol>
</section>
	<section class="content">
<div class="row">
	<!-- left column -->
	<div class="col-md-12">
		<!-- general form elements -->
		<div class="box box-success">
			<div class="box-header with-border">
				<h3 class="box-title">Nuevo Subgrupo</h3>
			</div>
			<!-- /.box-header -->
			<!-- form start -->
			<form role="form" method="POST" action="{{route('subgrupo.store')}}" >
					{!! csrf_field() !!}

				<div class="box-body col-lg-12 col-sm-12 col-md-12 col-xs-12">
					<div class="form-group">
						<label for="codigosubgrupo">Código</label>
						<input type="number" class="form-control" name="codigosubgrupo" value="{{old('codigosubgrupo')}}">
					</div>
					<div class="form-group">
						<label for="subgrupo">Subrupo</label>
						<input type="text" class="form-control" name="subgrupo" value="{{old('subgrupo')}}">
					</div>

      		<div class="form-group">
      			<label>Grupo</label>
      			<select name="idgrupo" class="form-control">
              @foreach ($grupos as $grupo)
                <option value="{{ $grupo->idgrupo }}">{{ $grupo->grupo }}</option>
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

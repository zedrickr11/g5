@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
      <h1>
        Hospital
        <small>Tipo de unidad de salud</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-medkit"></i>Tipos de unidades de salud</a></li>
        <li class="active">Ingreso</li>
      </ol>
</section>
	<section class="content">
<div class="row">
	<!-- left column -->
	<div class="col-md-12">
		<!-- general form elements -->
		<div class="box box-success">
			<div class="box-header with-border">
				<h3 class="box-title">Nuevo tipo de unidad</h3>
			</div>
      @if (count($errors)>0)
      <div class="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
        </ul>
      </div>
      @endif
			<!-- /.box-header -->
			<!-- form start -->
			<form role="form" method="POST" action="{{route('tipounidad.store')}}" >
					{!! csrf_field() !!}

				<div class="box-body col-md-12">
					<div class="form-group">
						<label for="direccion_fab">Código</label>
						<input type="text" class="form-control" name="idtipounidad" value="{{old('idtipounidad')}}">
					</div>
					<div class="form-group">
						<label for="telefono_fab">Nivel de atención</label>
						<input type="text" class="form-control" name="nivel_atencion" value="{{old('nivel_atencion')}}">
					</div>
          <div class="form-group">
						<label for="telefono_fab">Categoría</label>
						<input type="text" class="form-control" name="categoria" value="{{old('categoria')}}">
					</div>
          <div class="form-group">
						<label for="telefono_fab">Complejidad y resolución </label>
						<input type="text" class="form-control" name="comp_res" value="{{old('comp_res')}}">
					</div>
          <div class="form-group">
            <label for="telefono_fab">Unidad medica</label>
            <input type="text" class="form-control" name="unidad_medica" value="{{old('unidad_medica')}}">
          </div>
          <div class="form-group">
                <label for="hospital">Hospital</label>
                <select name="idhospital" id="idhospital" class="form-control selectpicker" data-live-search="true">
                  @foreach($hospitals as $hosp)
                         <option value="{{$hosp->idhospital}}">{{$hosp->hospital}}</option>
                          @endforeach
                  </select>
              </div>



				</div>

				<!-- /.box-body -->

				<div class="box-footer">

          <a href="{{route('tipounidad.index')}}">
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
$('#liRegiones').addClass("treeview active");


$('#liTipo').addClass("active");

</script>
<script>
$('#idhospital').select2({
  theme: "classic"
});
</script>
@endpush
@endsection

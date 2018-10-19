@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
      <h1>
        Hospital
        <small>Tipos de unidades de salud</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-medkit"></i> Tipo de unidad</a></li>
        <li class="active">Modificar</li>
      </ol>
</section>
	<section class="content">
<div class="row">
	<!-- left column -->
	<div class="col-md-12">
		<!-- general form elements -->
		<div class="box box-success">
			<div class="box-header with-border">
				<h3 class="box-title">Modificar</h3>
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
			<form role="form" method="POST" action="{{route('tipounidad.update',$tipos->idtipounidad)}}" >
				{!!method_field('PUT')!!}
				{!!csrf_field()!!}
				<div class="box-body col-md-12">
					<div class="form-group">
						<label for="direccion_fab">Nivel de atención</label>
						<input type="text" class="form-control" name="nivel_atencion" value="{{$tipos->nivel_atencion}}">
					</div>
          <div class="form-group">
            <label for="direccion_fab">Categoría</label>
            <input type="text" class="form-control" name="categoria" value="{{$tipos->categoria}}">
          </div>

          <div class="form-group">
            <label for="direccion_fab">Complejidad y resolución </label>
            <input type="text" class="form-control" name="comp_res" value="{{$tipos->comp_res}}">
          </div>
          <div class="form-group">
            <label for="direccion_fab">Unidad medica</label>
            <input type="text" class="form-control" name="unidad_medica" value="{{$tipos->unidad_medica}}">
          </div>



          <div class="form-group">
                <label for="hospital">Hospital</label>
                <select name="idhospital" id="idhospital" class="form-control selectpicker" data-live-search="true">
                  @foreach($hospitals as $hosp)
                           @if ($hosp->idhospital==$tipos->idhospital)
                         <option value="{{$hosp->idhospital}}" selected>{{$hosp->hospital}}</option>
                         @else
                         <option value="{{$hosp->idhospital}}">{{$hosp->hospital}}</option>
                         @endif
                          @endforeach
                  </select>
              </div>
				</div>

				<!-- /.box-body -->

				<div class="box-footer">
          <a href="{{route('tipounidad.index')}}">
          <button type="button" name="atras" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> </button>
          </a>
          <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-ok"></span> </button>
				</div>
			</form>
		</div>
		<!-- /.box -->


	</div>

</div>
</section>
<script src="{{asset('ajax/jquery.min.js')}}"></script>
<script src="{{asset('ajax/bootstrap.min.js')}}"></script>
<script src="{{asset('ajax/select2.min.js')}}"></script>
<script>
$('#idhospital').select2({
  theme: "classic"
});
</script>
@endsection

@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
  <h1>
    Tecnicos
    <small>Tecnico Externo</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-user-circle"></i> Tecnicos Externos</a></li>
    <li class="active">Tecnicos</li>
  </ol>
</section>
	<section class="content">
<div class="row">
	<!-- left column -->
	<div class="col-md-12">
		<!-- general form elements -->
		<div class="box box-success">
			<div class="box-header with-border">
				<h3 class="box-title">Nuevo Tecnico</h3>
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
			<form role="form" method="POST" action="{{route('externo.store')}}" >
					{!! csrf_field() !!}

				<div class="box-body col-md-12">
					<div class="form-group">
						<label for="direccion_fab">Nombre del Tecnico</label>
						<input type="text" class="form-control" name="nombre_tecnico_externo" value="{{old('nombre_tecnico_externo')}}">
					</div>
					<div class="form-group">
						<label for="telefono_fab">No de Telefono del Tecnico</label>
						<input type="text" class="form-control" name="telefono_tecnico_externo" value="{{old('telefono_tecnico_externo')}}">
					</div>
          <div class="form-group">
                <label for="hospital">Empresa</label>
                <select name="idservicio_tecnico" id="idempresa" class="form-control selectpicker" data-live-search="true">
                     <option value="0" disabled selected>=== Seleccione una empresa===</option>
                  @foreach($servicios as $s)
                         <option value="{{$s->idservicio_tecnico}}">{{$s->nombre_empresa_sevicio_tecnico}}</option>
                          @endforeach
                  </select>
              </div>



				</div>

				<!-- /.box-body -->

        <div class="box-footer">


          <a href="{{route('externo.index')}}">
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
<script src="{{asset('ajax/jquery.min.js')}}"></script>
<script src="{{asset('ajax/bootstrap.min.js')}}"></script>
<script src="{{asset('ajax/select2.min.js')}}"></script>
<script>
$('#idempresa').select2({
  theme: "classic"
});
</script>
@endsection

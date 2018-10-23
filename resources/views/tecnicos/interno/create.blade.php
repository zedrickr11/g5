@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
  <h1>
    Tecnicos
    <small>Tecnico Interno</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-user-circle"></i> Tecnicos Internos</a></li>
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
				<h3 class="box-title">Nueva Tecnico</h3>
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
			<form role="form" method="POST" action="{{route('interno.store')}}" >
					{!! csrf_field() !!}

				<div class="box-body col-md-12">
					<div class="form-group">
						<label for="direccion_fab">Nombre del Tecnico</label>
						<input type="text" class="form-control" name="nombre_tecnico" value="{{old('nombre_tecnico')}}">
					</div>
					<div class="form-group">
						<label for="telefono_fab">Codigo del Tecnico</label>
						<input type="text" class="form-control" name="codigo_tecnico" value="{{old('codigo_tecnico')}}">
					</div>



				</div>

				<!-- /.box-body -->

        <div class="box-footer">


          <a href="{{route('interno.index')}}">
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
  $('#liTecnicos').addClass("treeview active");
  $('#liInternos').addClass("active");
  </script>
@endpush
@endsection

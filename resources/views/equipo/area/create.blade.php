@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
      <h1>
        Equipo
        <small>Área</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-tv"></i> Equipo</a></li>
        <li class="active">Área</li>
      </ol>
</section>
	<section class="content">
<div class="row">
	<!-- left column -->
	<div class="col-md-12">
		<!-- general form elements -->
		<div class="box box-success">
			<div class="box-header with-border">
				<h3 class="box-title">Nueva Área</h3>
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
			<form role="form" method="POST" action="{{route('area.store')}}" >
					{!! csrf_field() !!}

				<div class="box-body col-md-6">

            <div class="form-group">
              <label for="idarea">Formato</label>
              <input style="text-transform: uppercase;" type="text" class="form-control" name="idarea" value="{{old('idarea')}}">
            </div>

				</div>
        <div class="box-body col-md-6">
        <div class="form-group">
          <label for="nombre_area">Nombre del área</label>
          <input type="text" class="form-control" name="nombre_area" value="{{old('nombre_area')}}">
        </div>
      </div>
				<!-- /.box-body -->

				<div class="box-footer">

          <a href="{{route('area.index')}}">
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
$('#liAreas').addClass("treeview active");
$('#liFormato').addClass("active");
</script>

@endpush
@endsection

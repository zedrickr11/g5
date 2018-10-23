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
			<form role="form" method="POST" action="{{route('subgrupo.store')}}" id="sub" >
					{!! csrf_field() !!}

				<div class="box-body col-lg-12 col-sm-12 col-md-12 col-xs-12">
          <div class="form-group">
      			<label>Grupo</label>
      			<select name="idgrupo" id="grupo" class="form-control">
               <option value="0" disable="true" selected="true">=== Selecciona un grupo ===</option>
              @foreach ($grupos as $grupo)
                <option value="{{ $grupo->idgrupo }}">{{ $grupo->grupo }}</option>
              @endforeach
      			</select>
      		</div>
					<div class="form-group">
						<label for="codigosubgrupo">Código</label>
						<input id="codigosubgrupo" class="form-control"  name="codigosubgrupo" readonly>
					</div>

					<div class="form-group">
						<label for="subgrupo">Subrupo</label>
						<input type="text" class="form-control" name="subgrupo" value="{{old('subgrupo')}}">
					</div>


    	</div>





				<!-- /.box-body -->

				<div class="box-footer">

          <a href="{{route('subgrupo.index')}}">
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
$('#liSubgrupo').addClass("active");
</script>
<script type="text/javascript">
  $('#grupo').on('change', function(e){
    console.log(e);
    var grupo_id = e.target.value;
    $.get('/json-confsubgrupo?grupo_id=' + grupo_id,function(data) {
      console.log(data);

      $.each(data, function(index, regenciesObj){

        $('#codigosubgrupo').val(regenciesObj.actual);
      })
    });
  });




</script>
@endpush


@endsection

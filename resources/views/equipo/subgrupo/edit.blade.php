@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
      <h1>
        Equipo
        <small>Subrupo</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-tv"></i> Equipo</a></li>
        <li class="active">Subrupo</li>
      </ol>
</section>
	<section class="content">
<div class="row">
	<!-- left column -->
	<div class="col-md-12">
		<!-- general form elements -->
		<div class="box box-success">
			<div class="box-header with-border">
				<h3 class="box-title">Editar Subrupo</h3>
			</div>
			<!-- /.box-header -->
			<!-- form start -->
			<form role="form" method="POST" action="{{route('subgrupo.update',$subgrupos->idsubgrupo)}}" >
        {!!method_field('PUT')!!}
        {!!csrf_field()!!}

				<div class="box-body col-lg-12 col-sm-12 col-md-12 col-xs-12">

					<div class="form-group">
						<label for="grupo">Subrupo</label>
						<input type="text" class="form-control" name="grupo" value="{{$subgrupos->subgrupo}}">
					</div>

      		<div class="form-group">
      			<label>Grupo</label>
      			<select name="idarea" class="form-control">
              @foreach ($grupos as $grupo)
                     @if ($grupo->idgrupo==$subgrupos->idgrupo)
                     <option value="{{$grupo->idgrupo}}" selected>{{$grupo->grupo}}</option>
                     @else
                     <option value="{{$grupo->idgrupo}}">{{$grupo->grupo}}</option>
                     @endif
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

@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
      <h1>
        Ficha Técnica
      <small>Detalle caracteristica especial</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-edit"></i>   Ficha Técnica</a></li>
      <li class="active">Detalle caracteristica especial</li>
      </ol>
</section>
	<section class="content">
<div class="row">
	<!-- left column -->
	<div class="col-md-12">
		<!-- general form elements -->
		<div class="box box-success">
			<div class="box-header with-border">
				<h3 class="box-title">Nuevo detalle caracteristica especial</h3>
			</div>
			<!-- /.box-header -->
			<!-- form start -->
			<form role="form" method="POST" action="{{route('detcaracesp.store')}}">
					{!! csrf_field() !!}



				<div class="box-body col-md-6">


                    <div class="form-group">
                      <label for="select" class="">Caracteristica especial</label>
                      <select name="idcaracteristica_especial" class="form-control" id="select">
                        @foreach($caracespefun as $carac1)
                        <option value="{{$carac1->idcaracteristica_especial}}">{{$carac1->nombre_caracteristica_especial}}</option>
                    @endforeach
                    </select>
                    </div>

                    <div class="form-group">
                      <label for="select" class="">Subgrupo  caractecnica tecnica</label>
                      <select name="idvalor_ref_esp" class="form-control" id="select">
                        @foreach($valorrefesp as $carac2)
                        <option value="{{$carac2->idvalor_ref_esp}}">{{$carac2->nombre_valor_ref_esp}}</option>
                    @endforeach
                    </select>
                    </div>
                    <div class="form-group">
                      <label for="select" class="">Equipo</label>
                      <select name="idequipo" class="form-control" id="select">
                        @foreach($equipo as $carac)
                        <option value="{{$carac->idequipo}}">{{$carac->nombre_equipo}}</option>
                    @endforeach
                    </select>
                    </div>





                    				</div>
	<div class="box-body col-md-6">
					<div class="form-group">

            <label for="direccion_fab">Estado caracteristica especial</label>
						<input type="text" class="form-control" name="estado_detalle_caracteristica_especial" value="{{old('estado_detalle_caracteristica_especial')}}">
					</div>


          <div class="form-group">
            <label for="direccion_fab">Descripcion caracteristica especial</label>
            <input type="text" class="form-control" name="descripcion_detalle_caracteristica_especial" value="{{old('descripcion_detalle_caracteristica_especial')}}">
          </div>

          <div class="form-group">
            <label for="direccion_fab">Valor caracteristica tecnica</label>
            <input type="text" class="form-control" name="valor_detalle_caracteristica_especial" value="{{old('valor_detalle_caracteristica_especial')}}">
          </div>



</div>



				<!-- /.box-body -->

        <div class="box-footer">

          <a href="{{route('detcaracesp.index')}}">
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
@endsection

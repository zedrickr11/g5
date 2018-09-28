@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
      <h1>
        Ficha Técnica
      <small>Detalle caracteristica técnica</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-edit"></i>   Ficha Técnica</a></li>
      <li class="active">Detalle caracteristica técnica</li>
      </ol>
</section>
	<section class="content">
<div class="row">
	<!-- left column -->
	<div class="col-md-12">
		<!-- general form elements -->
		<div class="box box-success">
			<div class="box-header with-border">
				<h3 class="box-title">Nuevo detalle caracteristica tecnica</h3>
			</div>
			<!-- /.box-header -->
			<!-- form start -->
			<form role="form" method="POST" action="{{route('detcaractec.store')}}">
					{!! csrf_field() !!}



				<div class="box-body col-md-6">


          <div class="form-group">
            <label for="select" class="">Caractecnica tecnica</label>
            <select name="idcaracteristica_tecnica" class="form-control" id="select">
              @foreach($caract_tec as $carac)
              <option value="{{$carac->idcaracteristica_tecnica}}">{{$carac->nombre_caracteristica_tecnica}}</option>
          @endforeach
          </select>
          </div>

                    <div class="form-group">
                      <label for="select" class="">Subgrupo  caractecnica tecnica</label>
                      <select name="idsubgrupo_carac_tecnica" class="form-control" id="select">
                        @foreach($subcaractec as $carac)
                        <option value="{{$carac->idsubgrupo_carac_tecnica}}">{{$carac->nombre_subgrupo_carac_tecnica}}</option>
                    @endforeach
                    </select>
                    </div>
                    <div class="form-group">
                      <label for="select" class="">Valor referencia tecnica</label>
                      <select name="idvalor_ref_tec" class="form-control" id="select">
                        @foreach($valorreftec as $carac)
                        <option value="{{$carac->idvalor_ref_tec}}">{{$carac->nombre_valor_ref_tec}}</option>
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

            <label for="direccion_fab">Estado caracteristica tecnica</label>
						<input type="text" class="form-control" name="estado_detalle_caracteristica_tecnica" value="{{old('estado_detalle_caracteristica_tecnica')}}">
					</div>


          <div class="form-group">
            <label for="direccion_fab">Descripcion caracteristica tecnica</label>
            <input type="text" class="form-control" name="descripcion_detalle_caracteristica_tecnica" value="{{old('descripcion_detalle_caracteristica_tecnica')}}">
          </div>

          <div class="form-group">
            <label for="direccion_fab">Valor caracteristica tecnica</label>
            <input type="text" class="form-control" name="valor_detalle_caracteristica_tecnica" value="{{old('valor_detalle_caracteristica_tecnica')}}">
          </div>

<br>

          <a href="{{route('detcaractec.index')}}">
            <button type="button" name="atras" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> </button>
          </a>
          <button class="btn btn-danger" type="reset"><span class="glyphicon glyphicon-remove"></span> </button>
          <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-ok"></span> </button>


</div>



				<!-- /.box-body -->

        <div class="box-footer">


        </div>
			</form>
		</div>
		<!-- /.box -->


	</div>

</div>
</section>
@endsection

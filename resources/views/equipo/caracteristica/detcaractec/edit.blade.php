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
				<h3 class="box-title">Editar Detalle caracteristica tecnica</h3>
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
			<form role="form" method="POST" action="{{route('detcaractec.update',$detcaractec->iddetalle_caracteristica_tecnica)}}" >
				{!!method_field('PUT')!!}
				{!!csrf_field()!!}
        <div class="box-body col-md-6">

          <div class="form-group">
              <label for="select" class="">Caractecnica tecnica</label>
            <br>
            <select name="idcaracteristica_tecnica"  class="form-control" value="{{$detcaractec->idcaracteristica_tecnica}}">
      @foreach($caract_tec as $hosp)
              @if ($hosp->idcaracteristica_tecnica==$detcaractec->idcaracteristica_tecnica)
            <option value="{{$hosp->idcaracteristica_tecnica}}" selected>{{$hosp->nombre_caracteristica_tecnica}}</option>
            @else
            <option value="{{$hosp->idcaracteristica_tecnica}}">{{$hosp->nombre_caracteristica_tecnica}}</option>
            @endif
             @endforeach
      </select>
          </div>


          <div class="form-group">
              <label for="select" class="">Subgrupo  caractecnica tecnica</label>
            <br>
            <select name="idsubgrupo_carac_tecnica"  class="form-control" value="{{$detcaractec->idsubgrupo_carac_tecnica}}">
      @foreach($subcaractec as $hosp)
      @if ($hosp->idsubgrupo_carac_tecnica==$detcaractec->idsubgrupo_carac_tecnica)

            <option value="{{$hosp->idsubgrupo_carac_tecnica}}" selected>{{$hosp->nombre_subgrupo_carac_tecnica}}</option>
            @else
            <option value="{{$hosp->idsubgrupo_carac_tecnica}}">{{$hosp->nombre_subgrupo_carac_tecnica}}</option>
            @endif
             @endforeach
      </select>
          </div>

          <div class="form-group">
              <label for="select" class="">Valor referencia tecnica</label>
            <br>
            <select name="idvalor_ref_tec"  class="form-control" value="{{$detcaractec->idvalor_ref_tec}}">
        @foreach($valorreftec as $hosp)
        @if ($hosp->idvalor_ref_tec==$detcaractec->idvalor_ref_tec)

            <option value="{{$hosp->idvalor_ref_tec}}" selected>{{$hosp->nombre_valor_ref_tec}}</option>
            @else
            <option value="{{$hosp->idvalor_ref_tec}}">{{$hosp->nombre_valor_ref_tec}}</option>
            @endif
             @endforeach
        </select>
          </div>

          <div class="form-group">
              <label for="select" class="">Equipo</label>
            <br>
            <select name="idequipo"  class="form-control" value="{{$detcaractec->idequipo}}">
        @foreach($equipo as $hosp)
        @if ($hosp->idequipo==$detcaractec->idequipo)

            <option value="{{$hosp->idequipo}}" selected>{{$hosp->nombre_equipo}}</option>
            @else
            <option value="{{$hosp->idequipo}}">{{$hosp->nombre_equipo}}</option>
            @endif
             @endforeach
        </select>
          </div>





                            </div>
  <div class="box-body col-md-6">
          <div class="form-group">

            <label for="direccion_fab">Estado caracteristica tecnica</label>
            <input type="text" class="form-control" name="estado_detalle_caracteristica_tecnica" value="{{$detcaractec->estado_detalle_caracteristica_tecnica}}">
          </div>


          <div class="form-group">
            <label for="direccion_fab">Descripcion caracteristica tecnica</label>
            <input type="text" class="form-control" name="descripcion_detalle_caracteristica_tecnica" value="{{$detcaractec->descripcion_detalle_caracteristica_tecnica}}">
          </div>

          <div class="form-group">
            <label for="direccion_fab">Valor caracteristica tecnica</label>
            <input type="text" class="form-control" name="valor_detalle_caracteristica_tecnica" value="{{$detcaractec->valor_detalle_caracteristica_tecnica}}">
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

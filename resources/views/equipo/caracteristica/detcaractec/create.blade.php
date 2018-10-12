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
				<h3 class="box-title">Nuevo Detalle caracteristica técnica</h3>
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
      {!!Form::open(array('url'=>'equipo/caracteristica/detcaractec','method'=>'POST','autocomplete'=>'off'))!!}
            {{Form::token()}}
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs pull-right">
                <li ><a href="#tab_1-1" data-toggle="tab">Información adicional</a></li>
                <li ><a href="#tab_7-7" data-toggle="tab">Servicio Técnico</a></li>
                <li ><a href="#tab_2-2" data-toggle="tab">Distribuidor</a></li>
                <li ><a href="#tab_3-3" data-toggle="tab">Fabricante</a></li>
                <li ><a href="#tab_4-4" data-toggle="tab">Localización y frecuencia de uso</a></li>
                <li><a href="#tab_5-5" data-toggle="tab">Identificación</a></li>
                <li class="active"><a href="#tab_6-6" data-toggle="tab">ID</a></li>

                <li class="pull-left header"><i class="fa fa-tv"></i>Nuevo Equipo</li>

              </ul>


    <div class="box-body">
      <div class="row">
        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">

        </div>
        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
          <div class="form-group">
            <label for="select" class="">Caractecnica tecnica</label>
            <select name="idcaracteristica_tecnica" class="form-control select2" id="idcaracteristica_tecnica" data-live-search="true">
              @foreach($caract_tec as $carac)
              <option value="{{$carac->idcaracteristica_tecnica}}">{{$carac->nombre_caracteristica_tecnica}}</option>
          @endforeach
          </select>
          </div>
        </div>
        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
          <div class="form-group">
            <label for="select" class="">Subgrupo  caractecnica tecnica</label>
            <select name="idsubgrupo_carac_tecnica" class="form-control" id="idsubgrupo_carac_tecnica">
              @foreach($subcaractec as $carac)
              <option value="{{$carac->idsubgrupo_carac_tecnica}}">{{$carac->nombre_subgrupo_carac_tecnica}}</option>
          @endforeach
          </select>
          </div>
          </div>
          <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
            <div class="form-group">
              <label for="select" class="">Valor referencia tecnica</label>
              <select name="idvalor_ref_tec" class="form-control select2" id="idvalor_ref_tec"  data-live-search="true">
                @foreach($valorreftec as $carac)
                <option value="{{$carac->idvalor_ref_tec}}">{{$carac->nombre_valor_ref_tec}}</option>
            @endforeach
            </select>
            </div>





      </div>
      <div class="row">
          <div class="">
              <div class="panel-body">
                  <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                    <div class="form-group">

                      <label for="direccion_fab">Estado caracteristica tecnica</label>
          						<input type="text" class="form-control" name="estado_detalle_caracteristica_tecnica" value="{{old('estado_detalle_caracteristica_tecnica')}}">
          					</div>
                  </div>
                  <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                    <div class="form-group">
                      <label for="direccion_fab">Descripcion caracteristica tecnica</label>
                      <input type="text" class="form-control" name="descripcion_detalle_caracteristica_tecnica" value="{{old('descripcion_detalle_caracteristica_tecnica')}}">
                    </div>

                  </div>

                  <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                    <div class="form-group">
                      <label for="direccion_fab">Valor caracteristica tecnica</label>
                      <input type="text" class="form-control" name="valor_detalle_caracteristica_tecnica" value="{{old('valor_detalle_caracteristica_tecnica')}}">
                    </div>


                  </div>

                  <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">

                  </div>

                  <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                      <table id="detalles" class="table table-striped table-bordered table-condensed table-hover">
                          <thead style="background-color:#2ab863">
                              <th>Opciones</th>
                              <th>Insumo</th>
                              <th>Cantidad</th>

                          </thead>
                          <tfoot>

                          </tfoot>
                          <tbody>

                          </tbody>
                      </table>
                   </div>
              </div>
          </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" id="">
          <div class="form-group">
                <input name"_token" value="{{ csrf_token() }}" type="hidden"></input>
                <a href="{{route('insumo-ingreso.index')}}">
                  <button type="button" name="atras" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> </button>
                </a>
                <button class="btn btn-danger" type="reset"><span class="glyphicon glyphicon-remove"></span> </button>

                <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-ok"></span> </button>

              </div>
        </div>
      </div>
    </div>
    </div>


      {!!Form::close()!!}

		</div>
		<!-- /.box -->


	</div>

</div>
</section>
<script src="{{asset('ajax/jquery.min.js')}}"></script>
<script src="{{asset('ajax/bootstrap.min.js')}}"></script>
<script src="{{asset('ajax/select2.min.js')}}"></script>

<script>

  $('#idcaracteristica_tecnica').select2({
    theme: "classic"
  });
  $('#idsubgrupo_carac_tecnica').select2({
    theme: "classic"  });

  $('#idvalor_ref_tec').select2({
      theme: "classic"
    });
  $(document).ready(function(){
    $('#bt_add').click(function(){
      agregar();
    });
  });

  var cont=0;
  total=0;
  subtotal=[];
  $("#guardar").hide();


  function agregar()
  {
    idarticulo=$("#pidinsumo").val();
    articulo=$("#pidinsumo option:selected").text();
    cantidad=$("#pcantidad").val();


    if (idarticulo!="" && cantidad!="" && cantidad>0 )
    {
        var fila='<tr class="selected" id="fila'+cont+'"><td><button type="button" class="btn btn-warning" onclick="eliminar('+cont+');">X</button></td><td><input type="hidden" name="idinsumo[]" value="'+idarticulo+'">'+articulo+'</td><td><input type="number" name="cantidad[]" value="'+cantidad+'"></td></tr>';
        cont++;
        limpiar();
        evaluar();
        $('#detalles').append(fila);
    }
    else
    {
        alert("Error al ingresar el detalle del ingreso, revise los datos del artículo");
    }
  }
  function limpiar(){
    $("#pcantidad").val("");

  }

  function evaluar()
  {
    if (cantidad>0)
    {
      $("#guardar").show();
    }
    else
    {
      $("#guardar").hide();
    }
   }

   function eliminar(index){

    $("#fila" + index).remove();
    evaluar();

  }
  $('#liCompras').addClass("treeview active");
  $('#liIngresos').addClass("active");
</script>

@endsection

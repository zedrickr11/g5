@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
      <h1>
        Compras
        <small>Insumos</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-tv"></i> Compras</a></li>
        <li class="active">Insumos</li>
      </ol>
</section>
	<section class="content">
<div class="row">
	<!-- left column -->
	<div class="col-md-12">
		<!-- general form elements -->
		<div class="box box-success">
			<div class="box-header with-border">
				<h3 class="box-title">Nuevo Ingreso de Insumos</h3>
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
      {!!Form::open(array('url'=>'compras/insumo-ingreso','method'=>'POST','autocomplete'=>'off'))!!}
            {{Form::token()}}
    <div class="box-body">
      <div class="row">
        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
          <div class="form-group">
                <label for="proveedor">Proveedor</label>
                <select name="idproveedor_insumo" id="idproveedor_insumo" class="form-control selectpicker" data-live-search="true">
                      @foreach($personas as $persona)
                       <option value="{{$persona->idproveedor_insumo}}">{{$persona->nombre}}</option>
                       @endforeach
                  </select>
              </div>
        </div>
        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
          <div class="form-group">
            <label>Tipo Comprobante</label>
            <select name="tipo_comprobante" id="tipo_comprobante" class="form-control">
                         <option value="Requisición">Requisición</option>
                         <option value="Otro">Otro</option>

            </select>
          </div>
        </div>
        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
              <div class="form-group">
                  <label for="serie_comprobante">Serie Comprobante</label>
                  <input type="text" name="serie_comprobante" value="{{old('serie_comprobante')}}" class="form-control" placeholder="Serie comprobante...">
              </div>
          </div>
          <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
              <div class="form-group">
                  <label for="num_comprobante">Número Comprobante</label>
                  <input type="text" name="num_comprobante" required value="{{old('num_comprobante')}}" class="form-control" placeholder="Número comprobante...">
              </div>
          </div>

      </div>
      <div class="row">
          <div class="">
              <div class="panel-body">
                  <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                      <div class="form-group">
                          <label>Artículo</label>
                          <select name="pidinsumo" class="form-control select2" id="pidinsumo" data-live-search="true">
                              @foreach($articulos as $articulo)
                              <option value="{{$articulo->idinsumo}}">{{$articulo->articulo}}</option>
                              @endforeach
                          </select>
                      </div>
                  </div>
                  <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                      <div class="form-group">
                          <label for="cantidad">Cantidad</label>
                          <input type="number" name="pcantidad" id="pcantidad" class="form-control"
                          placeholder="cantidad">
                      </div>
                  </div>

                  <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                      <div class="form-group">
                        <button type="button" id="bt_add" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></button>

                      </div>
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
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" id="guardar">
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


      {!!Form::close()!!}

		</div>
		<!-- /.box -->


	</div>

</div>
</section>



@push('scripts')
  <script>

    $('#pidinsumo').select2({
      theme: "classic"
    });
    $('#idproveedor_insumo').select2({
      theme: "classic"
    });

    $('#tipo_comprobante').select2({
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
  
  </script>
  <script>
  $('#liCompras').addClass("treeview active");
  $('#liIngresosI').addClass("active");
  </script>
@endpush

@endsection

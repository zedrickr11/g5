@extends ('layouts.admin')
@section ('contenido')
<section class="content-header">
      <h1>
        Rutinas
        <small>Rutina mantenimiento</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-th"></i> Rutinas</a></li>
        <li class="active">Rutina mantenimiento</li>
      </ol>
    </section>
    	<section class="content">
    <div class="row">
    	<!-- left column -->
    	<div class="col-md-12">
    		<!-- general form elements -->
    		<div class="box box-success">
    			<div class="box-header with-border">
    				<h3 class="box-title">Asignar rutina de mantenimiento</h3>
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

          <form role="form" method="POST" action="{{route('AsignarRutina.store')}}">
                {{Form::token()}}

                  <input type="hidden" id="idequipo" name="idequipo" style="width: 100%" value="{{$idequipo}}">

            <div class="box-body">
          <div class="row">
            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
              <div class="form-group">
                <label for="select" class="">Rutina</label>
                <select name="idrutina_mantenimiento" class="form-control" id="idrutina_mantenimiento" data-live-search="true">
                  @foreach($ruman as $ru)
                  <option value="{{$ru->frecuencia_rutina}}">@if($ru->frecuencia_rutina=='1') Mensual @endif
                    @if($ru->frecuencia_rutina=='2') Bimensual @endif
                    @if($ru->frecuencia_rutina=='3') Trimestral @endif
                    @if($ru->frecuencia_rutina=='6') Semestral @endif
                    @if($ru->frecuencia_rutina=='12') Anual @endif

                  </option>
                 @endforeach
              </select>
              </div>
              <div class="form-group">
                <label for="direccion_fab">Fecha inicio</label>
                <br>
                <input type="date" id="start" name="start" style="width: 100%" min="{{date("Y-m-d")}}" value="{{date("Y-m-d")}}" required>
              </div>
              <div class="form-group">
                <label for="direccion_fab">Fecha finalización</label>
                <br>
                <input type="date" name="end" id="end" style="width: 100%" min="{{date("Y-m-d")}}" value="{{date("Y-m-d")}}" required>
              </div>

              <div class="form-group">
                <label for="direccion_fab" >descripcion</label>
                <br>
                <input type="text" id="descripcion_noti" name="descripcion_noti" style="width: 100%" value="{{old('observaciones_rutina')}}">
              </div>





          </div>
          <div class="row">
              <div class="">
                  <div class="panel-body">



                      <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                          <div class="form-group">
                            <button type="button" id="bt_add" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></button>

                          </div>
                      </div>

                      <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                          <table id="detalles" class="table table-striped table-bordered table-condensed table-hover">
                              <thead style="background-color:#2ab863">
                                  <th>Opciones</th>
                                  <th>Rutina</th>
                                  <th>Fecha de rutina</th>

                              </thead>
                              <tfoot>

                              </tfoot>
                              <tbody>

                              </tbody>
                          </table>
                       </div>


            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
              <div class="form-group">
                    <input name"_token" value="{{ csrf_token() }}" type="hidden"></input>
                    <a href="{{route('actualizar',$idequipo)}}">
                      <button type="button" name="atras" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> </button>
                    </a>
                    <button class="btn btn-danger" type="reset"><span class="glyphicon glyphicon-remove"></span> </button>
                      <i id="guardar">
                    <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-ok"></span> </button>
                  </i>
                  </div>
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
        idrutina_mantenimiento=$("#idrutina_mantenimiento").val();
        rutina_mantenimiento=$("#idrutina_mantenimiento option:selected").text();
          start=$("#start").val();



        if (idrutina_mantenimiento!="" )
        {
            var fila='<tr class="selected" id="fila'+cont+'"><td><button type="button" class="btn btn-warning" onclick="eliminar('+cont+');">X</button></td><td><input type="hidden" name="idrutina_mantenimiento[]" value="'+idrutina_mantenimiento+'">'+rutina_mantenimiento+'</td><td><input type="hidden" name="start[]" value="'+start+'">'+start+'</td></tr>';
            cont++;
            limpiar();
            evaluar();
            $('#detalles').append(fila);
        }
        else
        {
            alert("Error al ingresar el detalle del ingreso, revise los datos del rutina");
        }
      }
      function limpiar(){
        $("#pcantidad").val("");

      }

      function evaluar()
      {
        if (idrutina_mantenimiento!="")
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

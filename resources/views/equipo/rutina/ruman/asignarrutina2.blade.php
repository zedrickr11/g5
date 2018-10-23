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

                  <input type="hidden" id="idequipo" name="idequipo" style="width: 100%" value="{{$id}}">

            <div class="box-body">
          <div class="row">




<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
  <div class="form-group">
    <label for="select" class="">Buscar equipo con rutina</label>
    <select name="pidequipo" class="form-control" id="pidequipo">


      @foreach($equipo as $equi)
      @php($num=0)
      @foreach($rutina as $rut)
      @if ($rut->idequipo==$equi->idequipo)
           @if ($rut->idtipo_rutina==3)
            @if ($rut->idsubgrupo==$idequipo)
       @if($num==0)

      <option value="{{$equi->idequipo}}">{{$equi->nombre_equipo}}</option>

      @php($num=1)
        @endif
        @endif
        @endif
      @endif
  @endforeach
  @endforeach
  </select>
  </div>
  <a href="{{route('actualizar',$id)}}">
   <button type="button" name="atras" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> </button>
 </a>


<button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-arrow-right"></span> </button>


</div>

        </div>


          {!!Form::close()!!}
</form>
    		</div>
    		<!-- /.box -->


    	</div>

    </div>
    </section>
    <script src="{{asset('ajax/jquery.min.js')}}"></script>
    <script src="{{asset('ajax/bootstrap.min.js')}}"></script>
    <script src="{{asset('ajax/select2.min.js')}}"></script>

    <script>
    $('#pidequipo').change(function(e) {
      if (pidequipo!="")
      {
        $("#guardar").show();
      }
      else
      {
        $("#guardar").hide();
      }
    });
      $('#pidequipo').select2({

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



        if (pidequipo!="" )
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
        if (pidequipo!="")
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

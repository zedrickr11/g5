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
    				<h3 class="box-title">Asignar técnicos</h3>
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

          <form role="form" method="POST" action="{{route('AsignarRutina.update',$id)}}" >
            {!!method_field('PUT')!!}
            {!!csrf_field()!!}


                  <input type="hidden" name="tecnicosaceptar" style="width: 100%" value="aceptar">


                  <div class="box-body">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                           <div class="col text-right">
          <button onclick="alerta()"  type="button" class="btn btn-danger btn-sm" name="button"><span class="glyphicon glyphicon-trash"> ELIMINAR RUTINA</button>
                  </div>
                </div>




                    <input type="hidden" class="form-control" name="aceptarfecha" value="aceptar">
                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
    	             <div class="box-body col-md-6">
                    <h3>Notificación </h3>
                    <div class="form-group">
                        <label>Fecha inicio rutina</label>

                        <div class="input-group date">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>


                          <input type="datetime-local" class="form-control pull-right" style="width: 100%" id="fechainicio" name="start"  min="" value="{{date("Y-m-d\TH:i:s", strtotime($notificacion->start))}}" required>
                        </div>

                    </div>

                    <div class="form-group">
                        <label>Fecha finalización rutina</label>
                        <div class="input-group date">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input type="datetime-local" class="form-control pull-right" style="width: 100%" id="fechafinal" name="end" min="" value="{{date("Y-m-d\TH:i:s", strtotime($notificacion->end))}}" required>
                        </div>

                    </div>
                    <div class="form-group">
                      <label for="direccion_fab">Descripción</label>
                      <input type="text" class="form-control" id="descripcion_noti" style="width: 100%" name="descripcion_noti" value="{{$notificacion->descripcion_noti}}">
                    </div>
                  </div>

                  <div class="box-body col-md-6">
                   <h3>Responsable </h3>


                   <div class="form-group">
                     <label for="select" class="">Responsabe de la rutina</label>
                     <select name="responsable_area_rutina_mantenimiento" class="form-control" style="width: 100%" id="responsable_area_rutina_mantenimiento" data-live-search="true">
                       @foreach($users as $carac)
                       @if($ruman->responsable_area_rutina_mantenimiento==$carac->id)

                          <option value="{{$carac->id}}" selected>{{$carac->name}}</option>
                       @else
                       <option value="{{$carac->id}}">{{$carac->name}}</option>
                       @endif
                   @endforeach
                   </select>
                   </div>


                     </div>
                    </div>


                	<div class="box-body col-md-6">
                <h3>Técnico interno </h3>
                    <div class="form-group">
                      <select name="tecnicointerno" class="form-control" style="width: 100%" id="tecnicointerno" data-live-search="true">
                        @foreach($tecnicointerno as $carac)
                        <option value="{{$carac->idtecnico}}">{{$carac->nombre_tecnico}}</option>
                    @endforeach
                    </select>
                    </div>
                    <div class="form-group">
                      <button type="button" id="bt_add2" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></button>

                    </div>
                    <table id="detalles2" class="table table-striped table-bordered table-condensed table-hover">
                        <thead style="background-color:#2ab863">
                            <th>Opciones</th>
                            <th>Técnico interno</th>

                        </thead>
                        <tfoot>

                        </tfoot>
                        <tbody>

                        </tbody>
                    </table>
                <br>
                <br>




                </div>

                <div class="box-body col-md-6">
                <h3>Técnico externo </h3>
                  <div class="form-group">
                    <select name="tecnicoexterno" class="form-control" style="width: 100%" id="tecnicoexterno" data-live-search="true">
                      @foreach($tecnicoexterno as $carac)
                      <option value="{{$carac->idtecnico_externo}}">{{$carac->nombre_tecnico_externo}}</option>
                  @endforeach
                  </select>
                  </div>
                  <div class="form-group">
                    <button type="button" id="bt_add3" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></button>

                  </div>
                      <table id="detalles3" class="table table-striped table-bordered table-condensed table-hover">
                          <thead style="background-color:#2ab863">
                              <th>Opciones</th>
                              <th>Técnico externo</th>

                          </thead>
                          <tfoot>

                          </tfoot>
                          <tbody>

                          </tbody>
                      </table>






                </div>
  <input type="hidden" name="idequipo" id="idequipo"  value="{{$idequipo}}">

                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                <a href="{{route('actualizar',$idequipo)}}">
                  <button type="button" name="atras" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> </button>
                </a>



                    <i>
                      <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-ok"></span> </button>
                    </i>

                </div>



                </div>
                </div>













          {!!Form::close()!!}
</form>
    		</div>
    		<!-- /.box -->


    	</div>

    </div>
    </section>
@push('scripts')

    <script src="{{asset('ajax/jquery.min.js')}}"></script>
    <script src="{{asset('ajax/bootstrap.min.js')}}"></script>
    <script src="{{asset('ajax/select2.min.js')}}"></script>


    <script>
    $('#responsable_area_rutina_mantenimiento').select2({

    });



    function alerta()
        {
        var mensaje;
        var opcion = confirm("¿SEGURO DESEA ELIMINAR LA RUTINA?");
        if (opcion == true) {


          var fila2='<input type="hidden" name="eliminar" value="eliminar"><input type="hidden" name="estado_rutina" value="DESACTIVADO">';



          $('#detalles2').append(fila2);

        $( "form:first" ).submit();
    	} else {

    	}
    	//document.getElementById("ejemplo").innerHTML = mensaje;
    };


    $('#tecnicointerno').select2({

    });
    $('#tecnicoexterno').select2({

    });
    $(document).ready(function(){
      $('#bt_add2').click(function(){

        agregar2();
      });
    });
    $(document).ready(function(){
      $('#bt_add3').click(function(){
        agregar3();
      });
    });

    //tecnico interno
    var cont2=0;
    total2=0;
    subtotal2=[];
    function agregar2()
    {
      idtecnicointerno=$("#tecnicointerno").val();
      tecnicointerno=$("#tecnicointerno option:selected").text();

      if (tecnicointerno!="" )
      {
          var fila2='<tr class="selected" id="fila2'+cont2+'"><td><button type="button" class="btn btn-warning" onclick="eliminar2('+cont2+');">X</button></td><td><input type="hidden" name="tecnicointerno[]" value="'+idtecnicointerno+'">'+tecnicointerno+'</td></tr>';
          cont2++;



          $('#detalles2').append(fila2);
      }
      else
      {
          alert("Error al ingresar el técnico interno, revise los datos de técnico interno");
      }
    }
    function eliminar2(index){

     $("#fila2" + index).remove();
     evaluar2();

    }
    // tecnico externo


    var cont3=0;
    total3=0;
    subtotal3=[];
    function agregar3()
    {
    idtecnicoexterno=$("#tecnicoexterno").val();
    tecnicoexterno=$("#tecnicoexterno option:selected").text();

    if (tecnicoexterno!="" )
    {
        var fila3='<tr class="selected" id="fila3'+cont3+'"><td><button type="button" class="btn btn-warning" onclick="eliminar3('+cont3+');">X</button></td><td><input type="hidden" name="tecnicoexterno[]" value="'+idtecnicoexterno+'">'+tecnicoexterno+'</td></tr>';
        cont3++;



        $('#detalles3').append(fila3);
    }
    else
    {
        alert("Error al ingresar el técnico externo, revise los datos de técnico externo");
    }
    }
    function eliminar3(index){

    $("#fila3" + index).remove();
    evaluar3();

    }

    </script>
@endpush
    @endsection

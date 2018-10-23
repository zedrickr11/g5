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
				<h3 class="box-title">Nueva prueba rutina</h3>
			</div>
			<!-- /.box-header -->
			<!-- form start -->
      @if (count($errors)>0)
      <div class="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
        </ul>
      </div>
      @endif

      <form role="form" method="POST" action="{{route('DetalleRutinaPrueba.update',$ruman->idrutina_mantenimiento)}}" >
        {!!method_field('PUT')!!}
        {!!csrf_field()!!}
      <div class="box-body col-md-6">
<input type="hidden" name="idequipo" value="{{$ruman->idequipo}}">
<input type="hidden" name="idtipo_rutina" value="{{$ruman->idtipo_rutina}}">
<input type="hidden" name="observaciones_rutina" value="{{$ruman->observaciones_rutina}}">
<input type="hidden" name="tiempo_estimado_rutina_mantenimiento" value="{{$ruman->tiempo_estimado_rutina_mantenimiento}}">
<input type="hidden" name="responsable_area_rutina_mantenimiento" value="{{$ruman->responsable_area_rutina_mantenimiento}}">
<input type="hidden" name="idsubgrupo" value="{{$ruman->idsubgrupo}}">
<input type="hidden" name="frecuencia_rutina" value="{{$ruman->frecuencia_rutina}}">
@php($estado='PENDIENTE')

                    @foreach($notificacion as $hosp)
                             @if ($hosp->rutina_mantenimiento_idrutina_mantenimiento==$ruman->idrutina_mantenimiento)

                               @if($ruman->frecuencia_rutina==1)

                             <input type="hidden" name="start22" value="{{date("Y-m-d",strtotime($hosp->start."+ 1 month"))}}">
                             <input type="hidden" name="end22" value="{{date("Y-m-d",strtotime($hosp->end."+ 1 month"))}}">
                             @endif
                             @if($ruman->frecuencia_rutina==2)

                           <input type="hidden" name="start22" value="{{date("Y-m-d",strtotime($hosp->start."+ 2 month"))}}">
                           <input type="hidden" name="end22" value="{{date("Y-m-d",strtotime($hosp->end."+ 2 month"))}}">
                           @endif
                           @if($ruman->frecuencia_rutina==3)

                         <input type="hidden" name="start22" value="{{date("Y-m-d",strtotime($hosp->start."+ 3 month"))}}">
                         <input type="hidden" name="end22" value="{{date("Y-m-d",strtotime($hosp->end."+ 3 month"))}}">
                         @endif
                         @if($ruman->frecuencia_rutina==6)

                       <input type="hidden" name="start22" value="{{date("Y-m-d",strtotime($hosp->start."+ 6 month"))}}">
                       <input type="hidden" name="end22" value="{{date("Y-m-d",strtotime($hosp->end."+ 6 month"))}}">
                       @endif
                       @if($ruman->frecuencia_rutina==12)

                     <input type="hidden" name="start22" value="{{date("Y-m-d",strtotime($hosp->start."+ 12 month"))}}">
                     <input type="hidden" name="end22" value="{{date("Y-m-d",strtotime($hosp->end."+ 12 month"))}}">
                     @endif

                           @endif
                            @endforeach

                  <div class="form-group">
                    <label for="select" class="">Tipo rutina</label>
                    <br>

                    <input type="hidden" name="rutinatipo" value="{{$ruman->idtipo_rutina}}">

                    @foreach($tiporu as $hosp)
                             @if ($hosp->idtipo_rutina==$ruman->idtipo_rutina)
                             <p>{{$hosp->tipo_rutina}}</p>


                           @endif
                            @endforeach

                  </div>

                  <div class="form-group">
                    <label for="select" class="">Equipo</label>
                    <br>

                    @foreach($equipo as $hosp)
                             @if ($hosp->idequipo==$ruman->idequipo)
                             <p>{{$hosp->nombre_equipo}}</p>


                           @endif
                            @endforeach


                  </div>


                  <div class="form-group">

                    <label for="direccion_fab">Observaciones rutina</label>
                    <p>{{$ruman->observaciones_rutina}}</p>
                    </div>




                          </div>
  <div class="box-body col-md-6">
  <div class="form-group">
          <label for="direccion_fab">Tiempo estimado rutina mantenimiento en horas</label>
          <p>{{$ruman->tiempo_estimado_rutina_mantenimiento}}</p>

  </div>


        <div class="form-group">

          <label for="direccion_fab">Responsable de area de rutina</label>
          @foreach($users as $us)
          @if($us->id==$ruman->responsable_area_rutina_mantenimiento)
          <p>{{$us->name}}</p>
@endif
          @endforeach
        </div>



        <div class="form-group">
          <label for="select" class="">Permiso de trabajo</label>
          <br>

          @foreach($permisotrabajo as $hosp)
                   @if ($hosp->idpermiso_trabajo==$ruman->permiso_trabajo_idpermiso_trabajo)
                   <p>{{$hosp->num_permiso}}</p>


                 @endif
                  @endforeach

        </div>

        <div class="form-group">

          <label for="direccion_fab">Estado rutina</label>
          <p>{{$ruman->estado_rutina}}</p>

        </div>

  </div>


  <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
      <table id="detalles" class="table table-striped table-bordered table-condensed table-hover">
          <thead style="background-color:#2ab863">

              <th>Rutina</th>
              <th>Subgrupo</th>
              <th>Valor</th>
              <th>Norma</th>
              <th>Unidad de medida</th>
              <th>Comentario</th>
              <th>Verificación</th>


          </thead>
          <tfoot>

   @php($cont = 0)
          </tfoot>
          <tbody>
              @foreach($detallerutina as $det)
                 @if ($det->idrutina_mantenimiento==$ruman->idrutina_mantenimiento)
              <tr>
                @foreach($pruru as $dets)
                @if ($dets->idprueba_rutina==$det->idprueba_rutina)
      <td>{{$dets->prueba_rutina}}</td>  @endif @endforeach
      @foreach($subpru as $dets)
      @if ($dets->idsubgrupo_prueba==$det->idsubgrupo_prueba)
      <td>{{$dets->subgrupo_prueba}}</td>@endif @endforeach
      @foreach($valrefpru as $dets)
      @if ($dets->idvalor_ref_prueba==$det->idvalor_ref_prueba)
      <td>{{$dets->descripcion}}</td>@endif @endforeach
      <td>{{$det->norma_detalle_rutina_prueba}}</td>
      <td>{{$det->unidad_medida_detalle_rutina_prueba}}</td>
        <input type="hidden" name="idprueba_rutina2[]" value="{{$det->idprueba_rutina}}">
        <input type="hidden" name="idvalor_ref_prueba2[]" value="{{$det->idvalor_ref_prueba}}">
    <input type="hidden" name="idsubgrupo_prueba2[]" value="{{$det->idsubgrupo_prueba}}">
    <input type="hidden" name="norma_detalle_rutina_prueba2[]" value="{{$det->norma_detalle_rutina_prueba}}">
<input type="hidden" name="unidad_medida_detalle_rutina_prueba2[]" value="{{$det->unidad_medida_detalle_rutina_prueba}}">
      <input type="hidden" name="iddetalle_rutina_prueba[]" value="{{$det->iddetalle_rutina_prueba}}">
               @if($det->estado_detalle_rutina_prueba==0)
                    <td><input type="text" name="comentario_detalle_rutina_prueba[]" value=""></td>
                    <input type="hidden" name="estado_detalle_rutina_prueba[{{$cont}}]" value="0">
                  <td><input type="checkbox" name="estado_detalle_rutina_prueba[{{$cont}}]" value="1"></td>
                  @else
                  <input type="hidden" name="comentario_detalle_rutina_prueba[]" value="{{$det->comentario_detalle_rutina_prueba}}">
                  <input type="hidden" name="estado_detalle_rutina_prueba[{{$cont}}]" value="1">
                      <td>{{$det->comentario_detalle_rutina_prueba}}</td>
                  <td>{{$det->fecha_detalle_rutina_prueba}}</td>
                  @endif
@php($cont=$cont+1)
              </tr>
              @endif
              @endforeach
          </tbody>
      </table>
   </div>


<!--Insumos -->
  <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
<h3>Insumo </h3>
  <div class="form-group">
    <select name="insumo" class="form-control" style="width: 100%" id="insumo" data-live-search="true">
      @foreach($insumo as $carac)
      <option value="{{$carac->idinsumo}}">{{$carac->nombre}}</option>
  @endforeach
  </select>
  </div>

  <div class="form-group">
    <label for="direccion_fab">Cantidad</label>
    <input type="number" class="form-control" name="cantidad" id="cantidad" min="1" step="1" value="1">
  </div>

  <div class="form-group">
    <button type="button" id="bt_add2" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></button>

  </div>
  <table id="detalles2" class="table table-striped table-bordered table-condensed table-hover">
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

  <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">

    <h3>Repuesto </h3>
      <div class="form-group">
        <select name="repuesto" class="form-control" style="width: 100%" id="repuesto" data-live-search="true">
          @foreach($repuesto as $carac)
          <option value="{{$carac->idrepuesto}}">{{$carac->nombre}}</option>
      @endforeach
      </select>
      </div>

      <div class="form-group">
        <label for="direccion_fab">Cantidad</label>
        <input type="number" class="form-control" name="cantidad2" id="cantidad2" min="1" step="1" value="1">
      </div>

      <div class="form-group">
        <button type="button" id="bt_add3" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></button>

      </div>
      <table id="detalles3" class="table table-striped table-bordered table-condensed table-hover">
          <thead style="background-color:#2ab863">
              <th>Opciones</th>
              <th>Repuesto</th>
              <th>Cantidad</th>

          </thead>
          <tfoot>

          </tfoot>
          <tbody>

          </tbody>
      </table>



    </div>
      <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">



        <h3>Herramienta </h3>
          <div class="form-group">
            <select name="herramienta" class="form-control" style="width: 100%" id="herramienta" data-live-search="true">
              @foreach($herramienta as $carac)
              <option value="{{$carac->idherramienta}}">{{$carac->herramienta}}</option>
          @endforeach
          </select>
          </div>
          <br>
          <br>
          <br>
          <br>


          <div class="form-group">
            <button type="button" id="bt_add4" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></button>

          </div>
          <table id="detalles4" class="table table-striped table-bordered table-condensed table-hover">
              <thead style="background-color:#2ab863">
                  <th>Opciones</th>
                  <th>Herramienta</th>


              </thead>
              <tfoot>

              </tfoot>
              <tbody>

              </tbody>
          </table>



</div>
</div>


				<!-- /.box-body -->


        <div class="box-footer">
          @foreach($equipo as $hosp)
                   @if ($hosp->idequipo==$ruman->idequipo)



           <a href="{{route('actualizar',$hosp->idequipo)}}">
            <button type="button" name="atras" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> </button>
          </a>
          @endif
           @endforeach
           <i id="ocultar2">
           <button class="btn btn-primary" onclick="show()" type="submit" name"aplazar">Aplazar rutina</button>
         </i>
               <i id="guardar2">
           <button class="btn btn-primary" onclick="show2()" type="submit">Terminar rutina</button>
         </i>
        </div>





		</div>
		<!-- /.box -->
</form>

	</div>

</div>
</section>

<script src="{{asset('ajax/jquery.min.js')}}"></script>
<script src="{{asset('ajax/bootstrap.min.js')}}"></script>
<script src="{{asset('ajax/select2.min.js')}}"></script>






<script>
$(document).ready(function(){
  $('#bt_add').click(function(){
    show();
  });
});
  $("#guardar").hide();
  $num=0;
$numero=<?php echo $cont; ?>;


$(function(){
  $('input:checkbox').change(function(){
    var p=0;
    if ($('input:checkbox:checked').length > 0) {

      $num=$num+1;

      p=1;
    }
    if (p==0){

		$num=$num-2;
	}

      evaluar();
  });
});


$( "#aplazar" ).click(function() {
  alert( "Handler for .click() called." );
});
function show(){

    var fila='<input type="hidden" name="estado_rutina" value="PENDIENTE"><input type="hidden" name="color" value="yellow">';
$('#detalles').append(fila);
}
function show2(){

    var fila='<input type="hidden" name="estado_rutina" value="REALIZADO"><input type="hidden" name="color" value="green">';
$('#detalles').append(fila);
}


function evaluar()
{
  if ($num==$numero)
  {
    $("#guardar").show();
      $("#ocultar").hide();
  }
  else
  {
    $("#guardar").hide();
    $("#ocultar").show();
  }
 }
//Insumo
$(document).ready(function(){
  $('#bt_add2').click(function(){

  var fila='<input type="hidden" name="insumoaceptar" value="aceptar">';
  $('#detalles').append(fila);
    agregar2();
  });
});
$('#insumo').select2({

});

var cont2=0;
total2=0;
subtotal2=[];
function agregar2()
{
  idinsumo=$("#insumo").val();
  insumo=$("#insumo option:selected").text();
    cantidad=$("#cantidad").val();

  if (cantidad!="" )
  {
      var fila2='<tr class="selected" id="fila2'+cont2+'"><td><button type="button" class="btn btn-warning" onclick="eliminar2('+cont2+');">X</button></td><td><input type="hidden" name="insumo[]" value="'+idinsumo+'">'+insumo+'</td><td><input type="hidden" name="cantidad[]" value="'+cantidad+'">'+cantidad+'</td></tr>';
      cont2++;
      limpiar();


      $('#detalles2').append(fila2);
  }
  else
  {
      alert("Error al ingresar el insumo, revise los datos de insumo");
  }
}
function eliminar2(index){

 $("#fila2" + index).remove();
 evaluar2();

}
function limpiar(){
  $("#cantidad").val("1");

}

//Repuesto
$(document).ready(function(){
  $('#bt_add3').click(function(){
  var fila='<input type="hidden" name="repuestoaceptar" value="aceptar">';
  $('#detalles').append(fila);
    agregar3();
  });
});
$('#repuesto').select2({

});

var cont3=0;
total3=0;
subtotal3=[];
function agregar3()
{
  idrepuesto=$("#repuesto").val();
  repuesto=$("#repuesto option:selected").text();
    cantidad2=$("#cantidad2").val();

  if (cantidad2!="" )
  {
      var fila3='<tr class="selected" id="fila3'+cont3+'"><td><button type="button" class="btn btn-warning" onclick="eliminar3('+cont3+');">X</button></td><td><input type="hidden" name="repuesto[]" value="'+idrepuesto+'">'+repuesto+'</td><td><input type="hidden" name="cantidad2[]" value="'+cantidad2+'">'+cantidad2+'</td></tr>';
      cont3++;
      limpiar2();


      $('#detalles3').append(fila3);
  }
  else
  {
      alert("Error al ingresar el repuesto, revise los datos de repuesto");
  }
}
function eliminar3(index){

 $("#fila3" + index).remove();
 evaluar3();

}
function limpiar2(){
  $("#cantidad2").val("1");

}

//Herramienta
$(document).ready(function(){
  $('#bt_add4').click(function(){
    var fila='<input type="hidden" name="herramientaceptar" value="aceptar">';
    $('#detalles').append(fila);

    agregar4();
  });
});
$('#herramienta').select2({

});

var cont4=0;
total4=0;
subtotal4=[];
function agregar4()
{
  idherramienta=$("#herramienta").val();
  herramienta=$("#herramienta option:selected").text();


  if (idherramienta!="" )
  {
      var fila4='<tr class="selected" id="fila4'+cont4+'"><td><button type="button" class="btn btn-warning" onclick="eliminar4('+cont4+');">X</button></td><td><input type="hidden" name="herramienta[]" value="'+idherramienta+'">'+herramienta+'</td></tr>';
      cont4++;



      $('#detalles4').append(fila4);
  }
  else
  {
      alert("Error al ingresar el herramienta, revise los datos de herramienta");
  }
}
function eliminar4(index){

 $("#fila4" + index).remove();
 evaluar3();

}



</script>


@endsection

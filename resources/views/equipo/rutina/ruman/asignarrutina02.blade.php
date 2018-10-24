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
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

<form role="form" method="POST" action="{{route('DetalleHerramienta.store')}}">
  {!!Form::open(array('url'=>'equipo/rutina/ruman','method'=>'POST','autocomplete'=>'off'))!!}
        {{Form::token()}}
        <a href="{{route('actualizar',$idequipo)}}">
          <button type="button" name="atras" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> </button></a>
                          <button class="btn btn-primary" type="submit">Asignar rutinas <span class="glyphicon glyphicon-ok"></span> </button>
  <br>
  <br>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
<input type="hidden" name="enviar" value="enviado">
<div class="nav-tabs-custom">
<ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
  @php($cont=0)
  @php($pri=0)
    @foreach($ruman as $st)
@if($pri=0)
  <li class="active"><a href="#{{$st->idrutina_mantenimiento}}" data-toggle="tab">RUTINA DE PRUEBA</li>

@else
<li><a href="#{{$st->idrutina_mantenimiento}}" data-toggle="tab">RUTINA DE PRUEBA </a></li>

@php($pri=1)
@endif
   @endforeach
</ul>



<div class="tab-content">
  <input type="hidden" name="idequipo" value="{{$idequipo}}">
  @foreach($ruman as $ru)

<div class=" tab-pane" id="{{$ru->idrutina_mantenimiento}}">
  <div class="box-body">
    <div class="row">
      <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
        <input type="hidden" name="aceptar[{{$cont}}]" value="NO">
        <label for="direccion_fab" ><h4> Asignar rutina  ---<input class="iCheck-helper" width="30px"
        height="30px" type="checkbox" name="aceptar[{{$cont}}]" value="SI">---</h4></label>


      </div>
      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    <h3>Fecha</h3>

    <input type="hidden" name="frecuencia_rutina[{{$cont}}]" style="width: 100%"  value="{{$ru->frecuencia_rutina}}">


      <div class="form-group">
        <label for="direccion_fab">Fecha inicio</label>
        <br>
        <input type="date" name="start[{{$cont}}]" style="width: 100%" min="{{date("Y-m-d")}}" value="{{date("Y-m-d")}}" required>
      </div>
      <div class="form-group">
        <label for="direccion_fab">Fecha finalización</label>
        <br>
        <input type="date" name="end[{{$cont}}]" style="width: 100%" min="{{date("Y-m-d")}}" value="{{date("Y-m-d")}}" required>
      </div>

      <div class="form-group">
        <label for="direccion_fab" >descripcion</label>
        <br>
        <input type="text" name="observaciones_rutina[{{$cont}}]" style="width: 100%" value="{{old('observaciones_rutina')}}">
      </div>
      <input type="hidden" name="idsubgrupo[{{$cont}}]" value="{{$ru->idsubgrupo}}">


    </div>
    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    <h3>Datos rutina</h3>

    <div class="form-group">
      <label for="select" class="">Tipo rutina</label>
      <br>


               <p>CORRECTIVO</p>


    </div>


  <div class="form-group">
          <label for="direccion_fab">Tiempo estimado rutina mantenimiento en horas</label>

          <input type="number" class="form-control" name="tiempo_estimado_rutina_mantenimiento[{{$cont}}]" value="{{$ru->tiempo_estimado_rutina_mantenimiento}}" onkeypress="return valida(event)">

  </div>
  <script>
  function valida(e){
      tecla = (document.all) ? e.keyCode : e.which;

      //Tecla de retroceso para borrar, siempre la permite
      if (tecla==8){
          return true;
      }

      // Patron de entrada, en este caso solo acepta numeros
      patron =/[0-9]/;
      tecla_final = String.fromCharCode(tecla);
      return patron.test(tecla_final);
  }
  </script>

        <div class="form-group">

          <label for="direccion_fab">Responsable de area de rutina</label>

          <select name="responsable_area_rutina_mantenimiento[{{$cont}}]" class="form-control" style="width: 100%" id="pidsubgrupo_rutina" data-live-search="true">
            @foreach($users as $carac)
            <option value="{{$carac->id}}">{{$carac->name}}</option>
        @endforeach
        </select>
        </div>





        <div class="form-group">

          <label for="direccion_fab">Estado rutina</label>

          <p>{{$ru->estado_rutina}}</p>
          <input type="hidden" class="form-control" name="estado_rutina[{{$cont}}]" value="{{$ru->estado_rutina}}">

        </div>

  </div>
  <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 table-responsive">
      <table id="detalles" class="table table-striped table-bordered table-condensed table-hover">
          <thead style="background-color:#2ab863">

            <th>Rutina</th>
            <th>Subgrupo</th>
            <th>Valor</th>
            <th>Norma</th>
            <th>Unidad de medida</th>



          </thead>
          <tfoot>


          </tfoot>
          <tbody>

              @foreach($rumen as $det)
                @if ($det->idrutina_mantenimiento==$ru->idrutina_mantenimiento)
                <tr>

                            @foreach($pruru as $dets)
                            @if ($dets->idprueba_rutina==$det->idprueba_rutina)
                  <td>{{$dets->prueba_rutina}}</td>
                  <input type="hidden" class="form-control" name="idprueba_rutina[{{$cont}}][]" value="{{$det->idprueba_rutina}}">
              @endif @endforeach
                  @foreach($subpru as $dets)
                  @if ($dets->idsubgrupo_prueba==$det->idsubgrupo_prueba)
                  <td>{{$dets->subgrupo_prueba}}</td>
                  <input type="hidden" class="form-control" name="idsubgrupo_prueba[{{$cont}}][]" value="{{$det->idsubgrupo_prueba}}">

                  @endif @endforeach
                  @foreach($valrefpru as $dets)
                  @if ($dets->idvalor_ref_prueba==$det->idvalor_ref_prueba)
                  <td>{{$dets->descripcion}}</td>
                  <input type="hidden" class="form-control" name="idvalor_ref_prueba[{{$cont}}][]" value="{{$det->idvalor_ref_prueba}}">

                  @endif @endforeach
                  <td>{{$det->norma_detalle_rutina_prueba}}</td>
                  <input type="hidden" class="form-control" name="norma_detalle_rutina_prueba[{{$cont}}][]" value="{{$det->norma_detalle_rutina_prueba}}">
                  <td>{{$det->unidad_medida_detalle_rutina_prueba}}</td>
                  <input type="hidden" class="form-control" name="unidad_medida_detalle_rutina_prueba[{{$cont}}][]" value="{{$det->unidad_medida_detalle_rutina_prueba}}">


                </tr>
                @endif

              @endforeach
          </tbody>
      </table>
   </div>




<!--
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

-->








      </div>
    </div>
  </div>
  @php($cont=$cont+1)

  @endforeach













    <input type="hidden" name="cont" value="{{$cont}}">
</div>
</div>
</div>

</form>
    {!!Form::close()!!}
@push('scripts')
<script>
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
</section>

@endsection

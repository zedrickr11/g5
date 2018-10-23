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

			<div class="box-header with-border">

			</div>
			<!-- /.box-header -->
			<!-- form start -->
			<form role="form" method="POST" action="{{route('ruman.store')}}">
        {!!Form::open(array('url'=>'equipo/rutina/ruman','method'=>'POST','autocomplete'=>'off'))!!}
              {{Form::token()}}
              <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>

          <div class="nav-tabs-custom">
          <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                    <li class="active"><a href="#tab_1-1" data-toggle="tab">Rutina</a></li>
              <li ><a href="#tab_2-2" data-toggle="tab">Detalle</a></li>
              <li ><a href="#tab_3-3" data-toggle="tab">Programación </a></li>


            </ul>


            <div class="tab-content">
              <div class="tab-pane active" id="tab_1-1">
                <div class="box-body">
                  <div class="row">

				<div class="box-body col-md-6">
          <input type="hidden" class="form-control" name="idequipo" value="{{$idequipo}}">
          <input type="hidden" class="form-control" name="idsubgrupo" value="{{$idsubgrupo}}">
          @foreach($equipo as $carac)
          @if($idequipo==$carac->idequipo)
          <input type="hidden" class="form-control" name="idsubgrupo" value="{{$carac->idsubgrupo}}">

         @endif
      @endforeach
      @if($idsubgrupo!='CORRECTIVO')
          <div class="form-group">
            <label for="frec_uso_dia_semana">Frecuencia</label>
            <select class="form-control" name="frecuencia_rutina">
              <option value="1">Mensual</option>
              <option value="2">Bimestral</option>
              <option value="3">Trimestral</option>
              <option value="6">Semestral</option>
              <option value="12">Anual</option>

            </select>
          </div>
          @endif



                    <div class="form-group">

                      <label for="direccion_fab">Tipo rutina</label>
                      @if($idsubgrupo!='CORRECTIVO')
                      <input type="hidden" class="form-control"  name="idtipo_rutina" value="1">
                      <p>PREVENTIVO</p>
                      @else
                      <input type="hidden" class="form-control"  name="idtipo_rutina" value="2">
                      <p>CORRECTIVO</p>
                      @endif
                    </div>

                    <div class="form-group">

                      <label for="direccion_fab">Observaciones rutina</label>
                      <br>
                        <textarea  style="width: 100%" name="observaciones_rutina" value="{{old('observaciones_rutina')}}">
                          </textarea>
                      </div>





                    				</div>
	<div class="box-body col-md-6">
    <div class="form-group">
            <label for="direccion_fab">Tiempo estimado rutina mantenimiento en horas</label>
<input type="number" class="form-control" name="tiempo_estimado_rutina_mantenimiento" value="{{old('tiempo_estimado_rutina_mantenimiento')}}" onkeypress="return valida(event)">
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
            <label for="select" class="">Responsabe de la rutina</label>
            <select name="responsable_area_rutina_mantenimiento" class="form-control" style="width: 100%" id="responsable_area_rutina_mantenimiento" data-live-search="true">
              @foreach($users as $carac)
              <option value="{{$carac->id}}">{{$carac->name}}</option>
          @endforeach
          </select>
          </div>



@if($idsubgrupo=='CORRECTIVO')
          <div class="form-group">
            <label for="select" class="">Permiso de trabajo</label>
            <select name="permiso_trabajo_idpermiso_trabajo" class="form-control" id="permiso_trabajo_idpermiso_trabajo" required>
              @foreach($solicitudtrabajo as $carac2)
              @foreach($permisotrabajo as $carac)
             @if($carac2->idequipo==$idequipo)
                 @if($carac2->idsolitud_trabajo==$carac->idsolitud_trabajo)

              <option value="{{$carac->idpermiso_trabajo}}">{{$carac->num_permiso}}</option>
              @endif
              @endif
              @endforeach
              @endforeach
          </select>
          </div>
@endif




</div>



				<!-- /.box-body -->



      </div>
      <a href="{{route('actualizar',$idequipo)}}">
        <button type="button" name="atras" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> </button>
      </a>
      <button class="btn btn-danger" type="reset"><span class="glyphicon glyphicon-remove"></span> </button>
      <a onclick="mostar();" data-toggle="tab" aria-expanded="true">
      <button type="button" name="adelante" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-right"></span> </button>
      </a>
      </div>
      </div>

  <div class="tab-pane" id="tab_2-2">


    <div class="box-body">
      <div class="row">


        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
          <div class="form-group">
              <label>Caracteristica rutina</label>
              <select name="pidcaracteristica_rutina" style="width: 100%" class="form-control" id="pidcaracteristica_rutina" data-live-search="true">
                @foreach($caracru as $carac1)
                <option value="{{$carac1->idcaracteristica_rutina}}">{{$carac1->caracteristica_rutina}}</option>
            @endforeach
            </select>
          </div>

        </div>
        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
          <div class="form-group">
            <label for="select" class="">Subgrupo rutina</label>
            <select name="pidsubgrupo_rutina" class="form-control" style="width: 100%" id="pidsubgrupo_rutina" data-live-search="true">
              @foreach($subru as $carac)
              <option value="{{$carac->idsubgrupo_rutina}}">{{$carac->subgrupo_rutina}}</option>
          @endforeach
          </select>
          </div>
          </div>
          <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
            <div class="form-group">
              <label for="pidvalor_ref_rutina" >Valor referencia rutina</label>
              <select name="pidvalor_ref_rutina" style="width: 100%" class="form-control select2" id="pidvalor_ref_rutina" data-live-search="true">
                @foreach($valrefru as $carac)
                <option value="{{$carac->idvalor_ref_rutina}}">{{$carac->descripcion}}</option>
            @endforeach
            </select>
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
                              <th>Grupo</th>
                              <th>Subgrupo</th>
                              <th>Valor</th>

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
                <a onclick="mostar2();">
                  <button type="button" name="atras" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> </button>
                </a>

                <i id="guardar">
                  <a onclick="mostar3();" data-toggle="tab" aria-expanded="true">
                    <button type="button" name="adelante" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-right"></span> </button>
                    </a>
                </i>
              </div>
                </div>
                </div>
        </div>
      </div>
    </div>
    </div>





      </div>

<div class="tab-pane" id="tab_3-3">
  <div class="box-body">
    <div class="row">
	<div class="box-body col-md-6">
    <div class="form-group">
        <label>Fecha inicio rutina</label>

        <div class="input-group date">
          <div class="input-group-addon">
            <i class="fa fa-calendar"></i>
          </div>
          <input type="datetime-local" class="form-control pull-right" style="width: 100%" id="fechainicio" name="start"  min="" value="" required>
        </div>

    </div>

    <div class="form-group">
        <label>Fecha finalización rutina</label>
        <div class="input-group date">
          <div class="input-group-addon">
            <i class="fa fa-calendar"></i>
          </div>
          <input type="datetime-local" class="form-control pull-right" style="width: 100%" id="fechafinal" name="end" min="" value="" required>
        </div>

    </div>
    <div class="form-group">
      <label for="direccion_fab">Descripción</label>
      <input type="text" class="form-control" id="descripcion_noti" style="width: 100%" name="descripcion_noti" value="{{old('descripcion_noti')}}">
    </div>


    <div class="form-group">
          <input name"_token" value="{{ csrf_token() }}" type="hidden"></input>
          <a onclick="mostar();">
            <button type="button" name="atras" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> </button>
          </a>

          <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-ok"></span> </button>

        </div>

  </div>

</div>

</div>
</div>
<div class="tab-pane" id="tab_4-4">
  <div class="box-body">
    <div class="row">
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


    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
<a onclick="mostar3();">
  <button type="button" name="atras" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> </button>
</a>



    <i>
      <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-ok"></span> </button>
    </i>

</div>



</div>
</div>

</div>




      </div>
      </div>

			</form>
          {!!Form::close()!!}

    </div>
		<!-- /.box -->


	</div>

</section>



<script src="{{asset('ajax/jquery.min.js')}}"></script>
<script src="{{asset('ajax/bootstrap.min.js')}}"></script>
<script src="{{asset('ajax/select2.min.js')}}"></script>






<script>


$(document).ready(function(){
    $("#fechainicio").change(function(){
        //guardo en una variable el valor del INPUT
     txts = $("#fechainicio").val();
        //imprimo un alert del string cada que se escribe un caracter
                $('#fechafinal').empty();
      //  alert(txts);
      //  $('#fechafinal').empty();


    });


});



function mostar(){

  $('.nav-tabs a[href="#tab_2-2"]').tab('show');
}
function mostar2(){
  $('.nav-tabs a[href="#tab_1-1"]').tab('show');
}
function mostar3(){
  $('.nav-tabs a[href="#tab_3-3"]').tab('show');
}
function mostar4(){
  $('.nav-tabs a[href="#tab_4-4"]').tab('show');
}
$('#tipo_rutina').select2({

});
$('#permiso_trabajo_idpermiso_trabajo').select2({

});
$('#subgrupo').select2({

});
$('#tipo_rutina2').select2({

});
  $('#pidcaracteristica_rutina').select2({

  });

  $('#pidvalor_ref_rutina').select2({
    });

  $('#pidsubgrupo_rutina').select2({

    });
    $('#responsable_area_rutina_mantenimiento').select2({

      });
  $(document).ready(function(){
    $('#bt_add').click(function(){
      agregar();
    });
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

  var cont=0;
  total=0;
  subtotal=[];
  $("#guardar").hide();


  function agregar()
  {
    idcaracteristica=$("#pidcaracteristica_rutina").val();
    caracteristica=$("#pidcaracteristica_rutina option:selected").text();
    idsubgrupo_rutina=$("#pidsubgrupo_rutina").val();
    subgrupo_rutina=$("#pidsubgrupo_rutina option:selected").text();
    idvalor_ref_rutina=$("#pidvalor_ref_rutina").val();
    valor_ref_rutina=$("#pidvalor_ref_rutina option:selected").text();
    idsubgrupo=$("#idsubgrupo_rutina").val();
    subgrupo=$("#pidsubgrupo_rutina option:selected").text();
    valor=$("#pidvalor_ref_rutina option:selected").text();
   comentario_detalle_caracteristica_rutina=$("#pcomentario_detalle_caracteristica_rutina").val();


    if (caracteristica!="" && subgrupo!="" && valor!="" )
    {
        var fila='<tr class="selected" id="fila'+cont+'"><td><button type="button" class="btn btn-warning" onclick="eliminar('+cont+');">X</button></td><td><input type="hidden" name="idcaracteristica_rutina[]" value="'+idcaracteristica+'">'+caracteristica+'</td><td><input type="hidden" name="idsubgrupo_rutina[]" value="'+idsubgrupo_rutina+'">'+subgrupo_rutina+'</td><td><input type="hidden" name="idvalor_ref_rutina[]" value="'+idvalor_ref_rutina+'">'+valor_ref_rutina+'</td></tr>';
        cont++;
        limpiar();
        evaluar();
        $('#detalles').append(fila);
    }
    else
    {
        alert("Error al ingresar el detalle de la rutina, revise los datos de detalle rutina");
    }
  }
  function limpiar(){
    $("#pcomentario_detalle_caracteristica_rutina").val("");

  }

  function evaluar()
  {
    if ( valor!="" )
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




  $('#liCompras').addClass("treeview active");
  $('#liIngresos').addClass("active");
</script>


@endsection

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
            <!--  <li ><a href="#tab_3-3" data-toggle="tab">Programación </a></li>-->

            </ul>


            <div class="tab-content">
              <div class="tab-pane active" id="tab_1-1">
                <div class="box-body">
                  <div class="row">

				<div class="box-body col-md-6">

                    <div class="form-group">
                      <label for="select" class="">Tipo rutina</label>
                      <select name="idtipo_rutina" class="form-control" id="tipo_rutina">
                        @foreach($tiporu as $carac)
                        <option value="{{$carac->idtipo_rutina}}">{{$carac->tipo_rutina}}</option>
                    @endforeach
                    </select>
                    </div>



                    <div class="form-group">

                      <label for="direccion_fab">Observaciones rutina</label>
                      <input type="text" class="form-control" name="observaciones_rutina" value="{{old('observaciones_rutina')}}">
                    </div>


                              <div class="form-group">
                                <label for="select" class="">Subgrupo</label>
                                <select name="subgrupo" class="form-control" id="subgrupo">
                                  @foreach($subgrupo as $carac)
                                  <option value="{{$carac->idsubgrupo}}">{{$carac->subgrupo}}</option>
                              @endforeach
                              </select>
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

            <label for="direccion_fab">Responsable de area de rutina</label>
            <input type="text" class="form-control" name="responsable_area_rutina_mantenimiento" value="{{old('responsable_area_rutina_mantenimiento')}}">
          </div>




<!--
          <div class="form-group">
            <label for="select" class="">Permiso de trabajo</label>
            <select name="permiso_trabajo_idpermiso_trabajo" class="form-control" id="permiso_trabajo_idpermiso_trabajo">
              @foreach($permisotrabajo as $carac)
              <option value="{{$carac->idpermiso_trabajo}}">{{$carac->num_permiso}}</option>
          @endforeach
          </select>
          </div>
-->




</div>



				<!-- /.box-body -->



      </div>
      <a href="{{route('ruman.index')}}">
        <button type="button" name="atras" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> </button>
      </a>
      <button class="btn btn-danger" type="reset"><span class="glyphicon glyphicon-remove"></span> </button>
      <a onclick="mostar();" data-toggle="tab" aria-expanded="true">
      <button type="button" name="adelante" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-right"></span> </button>
      </a>
      </div>
      </div>

  <div class="tab-pane active" id="tab_2-2">


    <div class="box-body">
      <div class="row">


        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
          <div class="form-group">
              <label>Caracteristica rutina</label>
              <select name="pidcaracteristica_rutina" class="form-control" id="pidcaracteristica_rutina" data-live-search="true">
                @foreach($caracru as $carac1)
                <option value="{{$carac1->idcaracteristica_rutina}}">{{$carac1->caracteristica_rutina}}</option>
            @endforeach
            </select>
          </div>

        </div>
        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
          <div class="form-group">
            <label for="select" class="">Subgrupo rutina</label>
            <select name="pidsubgrupo_rutina" class="form-control" id="pidsubgrupo_rutina" data-live-search="true">
              @foreach($subru as $carac)
              <option value="{{$carac->idsubgrupo_rutina}}">{{$carac->subgrupo_rutina}}</option>
          @endforeach
          </select>
          </div>
          </div>
          <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
            <div class="form-group">
              <label for="pidvalor_ref_rutina" >Valor referencia rutina</label>
              <select name="pidvalor_ref_rutina" class="form-control select2" id="pidvalor_ref_rutina" data-live-search="true">
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
                              <th>Comentario</th>

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
    </div>





      </div>
  <!--
<div class="tab-pane active" id="tab_3-3">
  <div class="box-body">
    <div class="row">
	<div class="box-body col-md-6">
    <div class="form-group">
        <label>Fecha inicio rutina</label>

        <div class="input-group date">
          <div class="input-group-addon">
            <i class="fa fa-calendar"></i>
          </div>
          <input type="date" class="form-control pull-right" id="fechainicio" name="start"  min="{{date("Y-m-d")}}" value="{{date("Y-m-d")}}">
        </div>

    </div>

    <div class="form-group">
        <label>Fecha finalización rutina</label>
        <div class="input-group date">
          <div class="input-group-addon">
            <i class="fa fa-calendar"></i>
          </div>
          <input type="date" class="form-control pull-right" id="fechafinal" name="end" min="" value="{{date("Y-m-d")}}">
        </div>

    </div>
    <div class="form-group">
      <label for="direccion_fab">Descripción</label>
      <input type="text" class="form-control" id="descripcion_noti" name="descripcion_noti" value="{{old('descripcion_noti')}}">
    </div>


    <div class="form-group">
          <input name"_token" value="{{ csrf_token() }}" type="hidden"></input>
          <a onclick="mostar();">
            <button type="button" name="atras" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> </button>
          </a>
          <button class="btn btn-danger" type="reset"><span class="glyphicon glyphicon-remove"></span> </button>
          <i>
            <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-ok"></span> </button>
          </i>
        </div>

  </div>

</div>

</div>
</div>
-->
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

<script type="text/javascript">
	window.onload=function(){
		$('.nav-tabs a[href="#tab_2-2"]').tab('show');
      $('.nav-tabs a[href="#tab_1-1"]').tab('show');
	}
</script>




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


if (window.location.hash) {
  $('.nav-tabs a[href="#tab_2-2"]').tab('show');
    $('.nav-tabs a[href="#tab_1-1"]').tab('show');
}
function mostar(){

  $('.nav-tabs a[href="#tab_2-2"]').tab('show');
}
function mostar2(){
  $('.nav-tabs a[href="#tab_1-1"]').tab('show');
}
function mostar3(){
  $('.nav-tabs a[href="#tab_3-3"]').tab('show');
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


    if (caracteristica!="" && subgrupo!="" && valor!="")
    {
        var fila='<tr class="selected" id="fila'+cont+'"><td><button type="button" class="btn btn-warning" onclick="eliminar('+cont+');">X</button></td><td><input type="hidden" name="idcaracteristica_rutina[]" value="'+idcaracteristica+'">'+caracteristica+'</td><td><input type="hidden" name="idsubgrupo_rutina[]" value="'+idsubgrupo_rutina+'">'+subgrupo_rutina+'</td><td><input type="hidden" name="idvalor_ref_rutina[]" value="'+idvalor_ref_rutina+'">'+valor_ref_rutina+'</td><td><input type="hidden" name="comentario_detalle_caracteristica_rutina[]" value="'+comentario_detalle_caracteristica_rutina+'">'+comentario_detalle_caracteristica_rutina+'</td></tr>';
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
    if ( valor!="")
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

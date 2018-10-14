@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
<h1>
Trabajo
<small>Permiso de Trabajo</small>
</h1>
<ol class="breadcrumb">
<li><a href="#"><i class="fa 	fa-suitcase"></i> Trabajo</a></li>
<li class="active">Permiso de  Trabajo</li>
</ol>
</section>
<section class="content">
<div class="row">
<!-- left column -->
<div class="col-md-12">

<!-- form start -->
{!!Form::open(array('url'=>'trabajo/permiso','method'=>'POST','autocomplete'=>'off'))!!}
      {{Form::token()}}
      <div class="nav-tabs-custom">
           <ul class="nav nav-tabs pull-right">

          <li ><a href="#tab_5-5" data-toggle="tab">Precaucion Ejecutante</a></li>
           <li ><a href="#tab_4-4" data-toggle="tab">Precaucion Responsable</a></li>
           <li ><a href="#tab_3-3" data-toggle="tab">Naturaleza de Peligro</a></li>
           <li><a href="#tab_2-2" data-toggle="tab">Tipo de Trabajo</a></li>
           <li class="active"><a href="#tab_1-1" data-toggle="tab">ID</a></li>
           <li class="pull-left header"><i class="fa fa-tv"></i>Nuevo Permiso de Trabajo</li>
          </ul>
<div class="tab-content">
    <div class="tab-pane active" id="tab_1-1">
      <div class="form-group">
<label for="direccion_fab">No de permiso</label>
<input type="text" class="form-control" name="num_permiso" value="{{old('num_permiso')}}">
</div>
<div class="form-group">
<label for="direccion_fab">Descripción</label>
<input type="text" class="form-control" name="descripcion" value="{{old('descripcion')}}">
</div>

<div class="form-group">
      <label for="solicitud">No de Solicitud</label>
      <select name="idsolitud_trabajo" id="idsolitud_trabajo" class="form-control selectpicker" data-live-search="true">
        @foreach($solicitudes as $s)
          <option value="{{$s->idsolitud_trabajo}}">{{$s->idsolitud_trabajo}}</option>
           @endforeach
        </select>
    </div>


<div class="form-group">
<label>Fecha</label>
<div class="input-group date">
<div class="input-group-addon">
<i class="fa fa-calendar"></i>
</div>
<input type="date" class="form-control pull-right" id="datepicker" name="fecha" value="{{old('fecha')}}">
</div>
</div>
    </div>
    <div class="tab-pane active" id="tab_2-2">
      <div class="form-group">
      <label>Tipo de Trabajo</label>
      <select name="idsolitud_trabajo" class="form-control select2" id="pidtipo" data-live-search="true">
      @foreach($tipos as $tip)
      <option value="{{$tip->idtipo_trabajo}}">{{$tip->tipo}}</option>
      @endforeach
      </select>
      </div>
      <div class="form-group">
      <label for="direccion_fab">Descripcion del Tipo de Trabajo</label>
      <input type="text" class="form-control" name="descripcion_detalle_tipo_trabajo_permiso" id="pdescripcion" value="">
      </div>
      <div class="form-group">
      <label for="estado">Estado</label>
      <select class="form-control" name="estado_detalle_tipo_trabajo_permiso" id="pestado">
      <option value='1'>SI</option>
      <option value='0'>NO</option>
      </select>
      </div>
      <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
      <div class="form-group">
      <button type="button" id="bt_add" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></button>
      </div>
      </div>
      <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
      <table id="detalle" class="table table-striped table-bordered table-condensed table-hover">
      <thead style="background-color:#2ab863">
        <th>Opciones</th>
        <th>Tipo de Trabajo</th>
        <th>Descripcion tipo de trabajo</th>
        <th>Estado</th>
      </thead>
        <tfoot>

        </tfoot>
        <tbody>

        </tbody>
      </table>
       </div>
    </div>
    <div class="tab-pane active" id="tab_3-3">
      <div class="form-group">
      <label>Naturaleza de Peligro</label>
      <select name="idnaturaleza_peligro" class="form-control select2" id="pidnaturaleza" data-live-search="true">
      @foreach($naturalezas as $na)
      <option value="{{$na->idnaturaleza_peligro}}">{{$na->naturaleza}}</option>
      @endforeach
      </select>
      </div>
      <div class="form-group">
      <label for="estado">Estado</label>
      <select class="form-control" name="estado_detalle_naturaleza_peligro" id="pestados">
      <option value='1'>SI</option>
      <option value='0'>NO</option>
      </select>
      </div>
      <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
      <div class="form-group">
      <button type="button" id="bt_addn" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></button>
      </div>
      </div>
      <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
      <table id="detallen" class="table table-striped table-bordered table-condensed table-hover">
      <thead style="background-color:#2ab863">
        <th>Opciones</th>
        <th>Naturaleza de Peligro</th>
        <th>Estado</th>

      </thead>
        <tfoot>

        </tfoot>
        <tbody>

        </tbody>
      </table>
       </div>
  </div>
  <div class="tab-pane active" id="tab_4-4">
    <div class="form-group">
    <label>Precaucion Responsable</label>
    <select name="idprecaucion_responsable" class="form-control select2" id="pidresponsable" data-live-search="true">
    @foreach($responsables as $r)
    <option value="{{$r->idprecaucion_responsable}}">{{$r->responsable}}</option>
    @endforeach
    </select>
    </div>
    <div class="form-group">
    <label for="estado">Estado</label>
    <select class="form-control" name="estado_detalle_precaucion_responsable" id="pestador">
    <option value='1'>SI</option>
    <option value='0'>NO</option>
    </select>
    </div>
    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
    <div class="form-group">
    <button type="button" id="bt_addr" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></button>
    </div>
    </div>
    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
    <table id="detaller" class="table table-striped table-bordered table-condensed table-hover">
    <thead style="background-color:#2ab863">
      <th>Opciones</th>
      <th>PRECAUCIONES OBLIGATORIAS PARA EL RESPONSABLE DEL ÁREA / EQUIPO</th>
      <th>Estado</th>

    </thead>
      <tfoot>

      </tfoot>
      <tbody>

      </tbody>
    </table>
     </div>
</div>

<div class="tab-pane active" id="tab_5-5">
  <div class="form-group">
  <label>Precaucion Ejecutante</label>
  <select name="idprecaucion_ejecutante" class="form-control select2" id="pidejecutante" data-live-search="true">
  @foreach($ejecutantes as $e)
  <option value="{{$e->idprecaucion_ejecutante}}">{{$e->ejecutante}}</option>
  @endforeach
  </select>
  </div>
  <div class="form-group">
  <label for="estado">Estado</label>
  <select class="form-control" name="estado_detalle_precaucion_ejecutante" id="pestadoj">
  <option value='1'>SI</option>
  <option value='0'>NO</option>
  </select>
  </div>
  <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
  <div class="form-group">
  <button type="button" id="bt_addj" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></button>
  </div>
  </div>
  <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
  <table id="detallej" class="table table-striped table-bordered table-condensed table-hover">
  <thead style="background-color:#2ab863">
    <th>Opciones</th>
    <th>PRECAUCIONES OBLIGATORIAS PARA EL EJECUTANTE</th>
    <th>Estado</th>

  </thead>
    <tfoot>

    </tfoot>
    <tbody>

    </tbody>
  </table>
   </div>
</div>




    <!-- /.tab-pane -->
    <div class="box-footer">
    @if (count($errors)>0)
    <div class="alert alert-danger">
    <ul>
    @foreach ($errors->all() as $error)
      <li>{{$error}}</li>
    @endforeach
    </ul>
    </div>
    @endif
      <input name"_token" value="{{ csrf_token() }}" type="hidden"></input>
    <a href="{{route('permiso.index')}}">
    <button type="button" name="atras" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> </button>
    </a>
    <button class="btn btn-danger" type="reset"><span class="glyphicon glyphicon-remove"></span> </button>
    <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-ok"></span> </button>
    </div>
</div>
<!-- /.tab-content -->
</div>
    <!-- nav-tabs-custom -->
{!!Form::close()!!}
</div>
<!-- /.box -->
</div>
</section>
<script src="{{asset('ajax/jquery.min.js')}}"></script>
<script src="{{asset('ajax/bootstrap.min.js')}}"></script>
<script src="{{asset('ajax/select2.min.js')}}"></script>
<script>
$('#idsolitud_trabajo').select2({
  theme: "classic"
});
</script>

<!--Detalle Permiso tipo de trabajo-->
<script>
$('#pidtipo').select2({
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
  idtipo=$("#pidtipo").val();
  tipo=$("#pidtipo option:selected").text();
  descripcion=$("#pdescripcion").val();
  idestado=$("#pestado").val();
  estado=$("#pestado option:selected").text();
  if (idtipo!="" )
  {
 var fila='<tr class="selected" id="fila'+cont+'"><td><button type="button" class="btn btn-warning" onclick="eliminar('+cont+');">X</button></td><td><input type="hidden" name="idtipo_trabajo[]" value="'+idtipo+'">'+tipo+'</td><td><input type="text" name="descripcion_detalle_tipo_trabajo_permiso[]" value="'+descripcion+'" ></td><td><input type="hidden" name="estado_detalle_tipo_trabajo_permiso[]" value="'+idestado+'">'+estado+'</td></tr>';
 cont++;
 limpiar();
 evaluar();
 $('#detalle').append(fila);
  }
  else
  {
      alert("Error al ingresar el detalle del tipo, revise los datos del tipo");
  }
}
function limpiar(){
  $("#pcantidad").val("");

}

function evaluar()
{
  if (idtipo!="")
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

<!--Detalle Naturaleza-->
<script>
$('#pidnaturaleza').select2({
  theme: "classic"
});
$(document).ready(function(){
  $('#bt_addn').click(function(){
    agregarn();
  });
});
var contn=0;
total=0;
subtotal=[];
$("#guardarn").hide();
function agregarn()
{
  idnaturaleza=$("#pidnaturaleza").val();
  naturaleza=$("#pidnaturaleza option:selected").text();
  idestado=$("#pestados").val();
  estado=$("#pestados option:selected").text();

  if (idnaturaleza!="" )
  {
var fila='<tr class="selected" id="fila'+contn+'"><td><button type="button" class="btn btn-warning" onclick="eliminar('+contn+');">X</button></td><td><input type="hidden" name="idnaturaleza_peligro[]" value="'+idnaturaleza+'">'+naturaleza+'</td><td><input type="hidden" name="estado_detalle_naturaleza_peligro[]" value="'+idestado+'">'+estado+'</td></tr>';
 contn++;
 limpiar();
 evaluar2();
 $('#detallen').append(fila);
  }
  else
  {
      alert("Error al ingresar el detalle de naturaleza, revise los datos de la naturaleza");
  }
}
function limpiar(){
  $("#pcantidad").val("");

}

function evaluar2()
{
  if (idnaturaleza!="")
  {
    $("#guardarn").show();
  }
  else
  {
    $("#guardarn").hide();
  }
 }


  function eliminar(index){

   $("#fila" + index).remove();
   evaluar();

 }
</script>

<!--Detalle de resoponsable-->
<script>
$('#pidresponsable').select2({
  theme: "classic"
});
$(document).ready(function(){
  $('#bt_addr').click(function(){
    agregarr();
  });
});
var contr=0;
total=0;
subtotal=[];
$("#guardarr").hide();

function agregarr()
{
  idresponsable=$("#pidresponsable").val();
  responsable=$("#pidresponsable option:selected").text();
  idestado=$("#pestador").val();
  estado=$("#pestador option:selected").text();

  if (idresponsable!="" )
  {
  var fila='<tr class="selected" id="fila'+contr+'"><td><button type="button" class="btn btn-warning" onclick="eliminar('+contr+');">X</button></td><td><input type="hidden" name="idprecaucion_responsable[]" value="'+idresponsable+'">'+responsable+'</td><td><input type="hidden" name="estado_detalle_precaucion_responsable[]" value="'+idestado+'">'+estado+'</td></tr>';
 contr++;
 limpiar();
 evaluar3();
 $('#detaller').append(fila);
  }
  else
  {
      alert("Error al ingresar el detalle de responsable, revise los datos de la precaución");
  }
}
function limpiar(){

}
function evaluar3()
{
  if (idresponsable!="")
  {
    $("#guardarr").show();
  }
  else{
    $("#guardarr").hide();
  }
 }
  function eliminar(index){
   $("#fila" + index).remove();
   evaluar();
 }
</script>

<!--Detalle Ejecutante -->
<script>
$('#pidejecutante').select2({
  theme: "classic"
});
$(document).ready(function(){
  $('#bt_addj').click(function(){
    agregarj();
  });
});
var contj=0;
total=0;
subtotal=[];
$("#guardarj").hide();

function agregarj()
{
  idejecutante=$("#pidejecutante").val();
  ejecutante=$("#pidejecutante option:selected").text();
  idestado=$("#pestadoj").val();
  estado=$("#pestadoj option:selected").text();

  if (idejecutante!="" )
  {
  var fila='<tr class="selected" id="fila'+contj+'"><td><button type="button" class="btn btn-warning" onclick="eliminar('+contj+');">X</button></td><td><input type="hidden" name="idprecaucion_ejecutante[]" value="'+idejecutante+'">'+ejecutante+'</td><td><input type="hidden" name="estado_detalle_precaucion_ejecutante[]" value="'+idestado+'">'+estado+'</td></tr>';
 contj++;
 limpiar();
 evaluar4();
 $('#detallej').append(fila);
  }
  else
  {
      alert("Error al ingresar el detalle de ejecutante, revise los datos de la precaución");
  }
}
function limpiar(){

}
function evaluar4()
{
  if (idejecutante!="")
  {
    $("#guardarj").show();
  }
  else{
    $("#guardarj").hide();
  }
 }
  function eliminar(index){
   $("#fila" + index).remove();
   evaluar();
 }
</script>

<script type="text/javascript">
window.onload=function(){
  $('.nav-tabs a[href="#tab_4-4"]').tab('show');
  $('.nav-tabs a[href="#tab_3-3"]').tab('show');
  $('.nav-tabs a[href="#tab_2-2"]').tab('show');
  $('.nav-tabs a[href="#tab_1-1"]').tab('show');
}
</script>
@endsection

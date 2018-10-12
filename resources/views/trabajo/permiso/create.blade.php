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

          <li ><a href="#tab_3-3" data-toggle="tab">Precaucion Ejecutante</a></li>
           <li ><a href="#tab_3-3" data-toggle="tab">Precaucion Responsable</a></li>
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
      <select name="solitud_trabajo_idsolitud_trabajo" id="solitud_trabajo_idsolitud_trabajo" class="form-control selectpicker" data-live-search="true">
        @foreach($solicitudes as $s)
          <option value="{{$s->idsolitud_trabajo}}">{{$s->num}}</option>
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
      <select name="pidinsumo" class="form-control select2" id="pidtipo" data-live-search="true">
      @foreach($tipos as $tip)
      <option value="{{$tip->idtipo_trabajo}}">{{$tip->tipo}}</option>
      @endforeach
      </select>
      </div>
      <div class="form-group">
      <label for="direccion_fab">Descripcion del Tipo de Trabajo</label>
      <input type="text" class="form-control" name="descripcion" id="pdescripcion" value="">
      </div>
      <div class="form-group">
      <label for="estado">Estado</label>
      <select class="form-control" name="estado" id="pestado">
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
    <a href="{{route('solicitud.index')}}">
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
$('#solitud_trabajo_idsolitud_trabajo').select2({
  theme: "classic"
});
</script>
<script type="text/javascript">
window.onload=function(){
  $('.nav-tabs a[href="#tab_3-3"]').tab('show');
  $('.nav-tabs a[href="#tab_2-2"]').tab('show');
  $('.nav-tabs a[href="#tab_1-1"]').tab('show');
}
</script>
@endsection

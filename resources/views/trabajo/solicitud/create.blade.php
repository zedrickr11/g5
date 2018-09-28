@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
<h1>
Trabajo
<small>Solicitud de Trabajo</small>
</h1>
<ol class="breadcrumb">
<li><a href="#"><i class="fa 	fa-suitcase"></i> Trabajo</a></li>
<li class="active">Solicitud de Trabajo</li>
</ol>
</section>
<section class="content">
<div class="row">
<!-- left column -->
<div class="col-md-12">
<!-- general form elements -->
<div class="box box-success">
<div class="box-header with-border">
<h3 class="box-title">Nueva solicitud de trabajo</h3>
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
<form role="form" method="POST" action="{{route('solicitud.store')}}" >
{!! csrf_field() !!}
<div class="box-body col-md-6">
  <div class="form-group">
  <label for="direccion_fab">No de solicitud</label>
  <input type="text" class="form-control" name="numero" value="{{old('numero')}}">
  </div>

<div class="form-group">
  <label for="estado">Compra de Material</label>
  <select class="form-control" name="estado">
    <option value='1'>SI</option>
    <option value='0'>NO</option>
  </select>
</div>

<div class="form-group">
<label for="direccion_fab">Solicitud dirigida</label>
<input type="text" class="form-control" name="dirigido_solitud_trabajo" value="{{old('dirigido_solitud_trabajo')}}">
</div>
<div class="form-group">
<label for="direccion_fab">Jefe</label>
<input type="text" class="form-control" name="jefe_solitud_trabajo" value="{{old('jefe_solitud_trabajo')}}">
</div>

</div>

<div class="box-body col-md-6">

<div class="form-group">
<label>Fecha de Solicitud</label>
<div class="input-group date">
<div class="input-group-addon">
<i class="fa fa-calendar"></i>
</div>
<input type="date" class="form-control pull-right" id="datepicker" name="fecha" value="{{old('fecha')}}">
</div>
</div>


<div class="form-group">
  <label for="solicitudes">Contratar Trabajo</label>
  <select class="form-control" name="contratar_trabajo"  >
    <option value="1">SI</option>
    <option value="0">NO</option>
  </select>
</div>
<div class="form-group">
<label for="direccion_fab">Puesto dirigido</label>
<input type="text" class="form-control" name="puesto_dirigido_solitud_trabajo" value="{{old('puesto_dirigido_solitud_trabajo')}}">
</div>
<div class="form-group">
<label for="direccion_fab">Edificio</label>
<input type="text" class="form-control" name="edificio_solitud_trabajo" value="{{old('edificio_solitud_trabajo')}}">
</div>
</div>

<div class="box-body col-md-12">
  <div class="form-group">
  <label for="direccion_fab">Descripcion</label>
  <input type="text" class="form-control" name="descripcion" value="{{old('descripcion')}}">
  </div>
</div>
<!-- /.box-body -->
<div class="box-footer">
<a href="{{route('solicitud.index')}}">
<button type="button" name="atras" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> </button>
</a>
<button class="btn btn-danger" type="reset"><span class="glyphicon glyphicon-remove"></span> </button>
<button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-ok"></span> </button>
</div>
</form>
</div>
<!-- /.box -->
</div>
</div>
</section>
@endsection

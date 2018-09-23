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
<!-- general form elements -->
<div class="box box-success">
<div class="box-header with-border">
<h3 class="box-title">Nuevo Permiso de trabajo</h3>
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
<form role="form" method="POST" action="{{route('permiso.store')}}" >
{!! csrf_field() !!}
<div class="box-body col-md-12">

<div class="form-group">
<label for="direccion_fab">No de permiso</label>
<input type="text" class="form-control" name="num_permiso" value="{{old('num_permiso')}}">
</div>
<div class="form-group">
<label for="direccion_fab">Descripción</label>
<input type="text" class="form-control" name="descripcion" value="{{old('descripcion')}}">
</div>


<div class="form-group">
<label for="select">No de Solicitud</label>
<select name="solitud_trabajo_idsolitud_trabajo" class="form-control" id="select">
@foreach($solicitudes as $s)
  <option value="{{$s->idsolitud_trabajo}}">{{$s->numero}}</option>
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
<!-- /.box-body -->
<div class="box-footer">
<a href="{{route('permiso.index')}}">
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

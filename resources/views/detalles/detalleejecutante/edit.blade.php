@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
  <h1>
  Detalles
  <small>Detalle Precaución Ejecutante</small>
  </h1>
  <ol class="breadcrumb">
  <li><a href="#"><i class="fa fa-object-ungroup"></i> Detalles</a></li>
  <li class="active">Detalle Precaución</li>
  </ol>
</section>
<section class="content">
<div class="row">
<!-- left column -->
<div class="col-md-12">
<!-- general form elements -->
<div class="box box-success">
<div class="box-header with-border">
<h3 class="box-title">Editar Detalle</h3>
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
<form role="form" method="POST" action="{{route('detalleejecutante.update',$ejecutantes->iddetalle_precaucion_ejecutante)}}" >
{!!method_field('PUT')!!}
{!!csrf_field()!!}
<div class="box-body col-md-12">
  <div class="form-group">
    <label>Precaución Ejecutante</label>
    <select name="idprecaucion_ejecutante" class="form-control" >
@foreach($precauciones as $r)
      @if ($r->idprecaucion_ejecutante==$ejecutantes->idprecaucion_ejecutante)
    <option value="{{$r->idprecaucion_ejecutante}}" selected>{{$r->precaucion_ejecutante}}</option>
    @else
    <option value="{{$r->idprecaucion_ejecutante}}">{{$r->precaucion_ejecutante}}</option>
    @endif
     @endforeach
</select>
</div>
<div class="form-group">
  <label>No de Permiso</label>
  <select name="idpermiso_trabajo" class="form-control" >
@foreach($permisos as $p)
    @if ($p->idpermiso_trabajo==$ejecutantes->idpermiso_trabajo)
  <option value="{{$p->idpermiso_trabajo}}" selected>{{$p->num_permiso}}</option>
  @else
  <option value="{{$p->idpermiso_trabajo}}">{{$p->num_permiso}}</option>
  @endif
   @endforeach
</select>
</div>

  <div class="form-group">
    <label for="estado">Estado</label>
    <select class="form-control" name="estado_detalle_precaucion_ejecutante">
      @if ($ejecutantes->estado_detalle_precaucion_ejecutante==1)
        <option value="1" selected>SI</option>
        <option value="0" >NO</option>
      @else
        <option value="1" >SI</option>
        <option value="0" selected>NO</option>
      @endif
    </select>
  </div>
</div>
<!-- /.box-body -->
<div class="box-footer">
<a href="{{route('detalleejecutante.index')}}">
<button type="button" name="atras" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> </button>
</a>
<button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-ok"></span> </button>
</div>
</form>
</div>
<!-- /.box -->
</div>
</div>
</section>
@endsection

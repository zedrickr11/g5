@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
<h1>
Detalles
<small>Detalle Precaución Ejecutante</small>
</h1>
<ol class="breadcrumb">
<li><a href="#"><i class="fa fa-object-ungroup"></i> Detalles </a></li>
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
<h3 class="box-title">Nuevo Detalle de Precaucion</h3>
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
<form role="form" method="POST" action="{{route('detalleejecutante.store')}}" >
{!! csrf_field() !!}
<div class="box-body col-md-12">
<div class="form-group">
  <label>Precaucion Ejecutante</label>
  <select name="idprecaucion_ejecutante" class="form-control">
    @foreach ($precauciones as $r)
      <option value="{{ $r->idprecaucion_ejecutante}}">{{ $r->precaucion_ejecutante}}</option>
    @endforeach
  </select>
</div>
<div class="form-group">
  <label>No de Permiso</label>
  <select name="idpermiso_trabajo" class="form-control">
    @foreach ($permisos as $p)
      <option value="{{ $p->idpermiso_trabajo}}">{{ $p->num_permiso}}</option>
    @endforeach
  </select>
</div>
<div class="form-group">
  <label for="estado">Estado</label>
  <select class="form-control" name="estado_detalle_precaucion_ejecutante"  >
    <option value="1">SI</option>
    <option value="0">NO</option>
  </select>
</div>


</div>
<!-- /.box-body -->
<div class="box-footer">
<a href="{{route('detalleejecutante.index')}}">
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

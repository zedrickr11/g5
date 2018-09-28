@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
  <h1>
  Detalles
  <small>Detalle Tipo de Trabajo Permiso</small>
  </h1>
  <ol class="breadcrumb">
  <li><a href="#"><i class="fa fa-object-ungroup"></i> Detalles</a></li>
  <li class="active">Detalle Tipo Permiso</li>
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
<form role="form" method="POST" action="{{route('detalletipotrabajo.update',$detpermisos->iddetalle_tipo_trabajo_permiso)}}" >
{!!method_field('PUT')!!}
{!!csrf_field()!!}
<div class="box-body col-md-12">
  <div class="form-group">
    <label>No de permiso</label>
    <select name="solitud_trabajo_idsolitud_trabajo" class="form-control" >
@foreach($permisos as $p)
      @if ($p->idpermiso_trabajo==$detpermisos->idpermiso_trabajo)
    <option value="{{$p->idpermiso_trabajo}}" selected>{{$p->num_permiso}}</option>
    @else
    <option value="{{$p->idpermiso_trabajo}}">{{$p->num_permiso}}</option>
    @endif
     @endforeach
</select>
</div>
<div class="form-group">
  <label>No de Permiso</label>
  <select name="tipo_trabajo_idtipo_trabajo" class="form-control" >
@foreach($tipos as $t)
    @if ($t->idtipo_trabajo==$detpermisos->tipo_trabajo_idtipo_trabajo)
  <option value="{{$t->idtipo_trabajo}}" selected>{{$t->nombre_tipo}}</option>
  @else
  <option value="{{$t->idtipo_trabajo}}">{{$t->nombre_tipo}}</option>
  @endif
   @endforeach
</select>
</div>
<div class="form-group">
<label for="direccion_fab">Descripción</label>
<input type="text" class="form-control" name="descripcion_detalle_tipo_trabajo_permiso" value="{{$detpermisos->descripcion_detalle_tipo_trabajo_permiso}}">
</div>
  <div class="form-group">
    <label for="estado">Estado</label>
    <select class="form-control" name="estado_detalle_tipo_trabajo_permiso">
      @if ($detpermisos->estado_detalle_tipo_trabajo_permiso==1)
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
<a href="{{route('detalletipotrabajo.index')}}">
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

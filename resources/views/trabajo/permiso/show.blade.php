@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
  <h1>
  Trabajo
  <small>Permiso de Trabajo</small>
  </h1>
  <ol class="breadcrumb">
  <li><a href="#"><i class="fa fa-suitcase"></i> Trabajo</a></li>
  <li class="active">Permiso de Trabajo</li>
  </ol>
</section>
<section class="content">
<div class="row">
<!-- left column -->
<div class="col-md-12">
<!-- general form elements -->
<div class="box box-success">
<div class="box-header with-border">
<h3 class="box-title">Detalles</h3>
</div>
<!-- /.box-header -->
<!-- form start -->
<div class="box-body col-md-12">
<div class="form-group">
<label for="direccion_fab">Id</label>
<p>{{$permisos->idpermiso_trabajo}}</p>
</div>
<div class="form-group">
<label for="telefono_fab">No de permiso</label>
<p>{{$permisos->num_permiso}}</p>
</div>
<div class="form-group">
<label for="telefono_fab">Descripción</label>
<p>{{$permisos->descripcion}}</p>
</div>
<div class="form-group">
  <label for="direccion_fab">No de Solicitud</label>
  <br>
@foreach($solicitudes as $s)
    @if ($s->idsolitud_trabajo==$permisos->solitud_trabajo_idsolitud_trabajo)
    <p>{{$s->numero}}</p>
  @endif
   @endforeach
</div>
<div class="form-group">
<label for="telefono_fab">Fecha</label>
<p>{{$permisos->fecha}}</p>
</div>
</div>
<!-- /.box-body -->
<div class="box-footer">
<a href="{{route('permiso.index')}}">
<button type="button" name="atras" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> </button>
</a>
</div>
</div>
<!-- /.box -->
</div>
</div>
</section>
@endsection
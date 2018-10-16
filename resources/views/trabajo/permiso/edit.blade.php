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
<h3 class="box-title">Editar permiso de trabajo</h3>
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
<form role="form" method="POST" action="{{route('permiso.update',$permisos->idpermiso_trabajo)}}" >
{!!method_field('PUT')!!}
{!!csrf_field()!!}
<div class="box-body col-md-12">
<div class="form-group">
<label for="direccion_fab">No de permiso</label>
<input type="text" class="form-control" name="num_permiso" value="{{$permisos->num_permiso}}">
</div>
<div class="form-group">
<label for="direccion_fab">Descripción</label>
<input type="text" class="form-control" name="descripcion" value="{{$permisos->descripcion}}">
</div>



<div class="form-group">
      <label for="solicitud">No de Solicitud</label>
      <select name="solitud_trabajo_idsolitud_trabajo" id="solitud_trabajo_idsolitud_trabajo" class="form-control selectpicker" data-live-search="true">
        @foreach($solicitudes as $s)
            @if ($s->idsolitud_trabajo==$permisos->solitud_trabajo_idsolitud_trabajo)
          <option value="{{$s->idsolitud_trabajo}}" selected>{{$s->numero}}</option>
          @else
          <option value="{{$s->idsolitud_trabajo}}">{{$s->numero}}</option>
          @endif
           @endforeach
        </select>
    </div>



<div class="form-group">
<label>Fecha</label>
<div class="input-group date">
<div class="input-group-addon">
<i class="fa fa-calendar"></i>
</div>
<input type="date" class="form-control pull-right" id="datepicker" name="fecha" value="{{$permisos->fecha}}">
</div>
</div>

</div>
<!-- /.box-body -->
<div class="box-footer">
<a href="{{route('permiso.index')}}">
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
<script src="{{asset('ajax/jquery.min.js')}}"></script>
<script src="{{asset('ajax/bootstrap.min.js')}}"></script>
<script src="{{asset('ajax/select2.min.js')}}"></script>
<script>
$('#solitud_trabajo_idsolitud_trabajo').select2({
  theme: "classic"
});
</script>
@endsection

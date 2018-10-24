@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
<h1>
Trabajo
<small>Seguimiento de trabajo</small>
</h1>
<ol class="breadcrumb">
<li><a href="#"><i class="fa 	fa-suitcase"></i> Trabajo</a></li>
<li class="active">Seguimiento de  trabajo</li>
</ol>
</section>
<section class="content">
<div class="row">
<!-- left column -->
<div class="col-md-12">
<!-- general form elements -->
<div class="box box-success">
<div class="box-header with-border">
<h3 class="box-title">Nuevo seguimiento de trabajo</h3>
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
<form role="form" method="POST" action="{{route('seguimiento.store')}}" >
{!! csrf_field() !!}
<div class="box-body col-md-12">

<div class="form-group">
<label for="direccion_fab">Nombre del responsable</label>
<input type="text" class="form-control" name="responsable_seguimiento" value="{{old('responsable_seguimiento')}}">
</div>

<div class="form-group">
<label>Fecha</label>
<div class="input-group date">
<div class="input-group-addon">
<i class="fa fa-calendar"></i>
</div>
<input type="date" class="form-control pull-right" id="datepicker" name="fecha_seguimiento" value="{{old('fecha_seguimiento')}}">
</div>
</div>


<div class="form-group">
<label for="direccion_fab">No. solicitud</label>
<input type="text" class="form-control"  readonly value="{{$solicitudes->numero}}">
<input type="hidden" class="form-control" name="solitud_trabajo_idsolitud_trabajo" readonly value="{{$solicitudes->idsolitud_trabajo}}">
</div>



</div>
<!-- /.box-body -->
<div class="box-footer">
<a href="{{route('seguimiento.index')}}">
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
@push ('scripts')
<script>
$('#liSolicitud').addClass("treeview active");


$('#liSeguimiento').addClass("active");

</script>
<script>
$('#solitud_trabajo_idsolitud_trabajo').select2({
  theme: "classic"
});






</script>
@endpush


@endsection

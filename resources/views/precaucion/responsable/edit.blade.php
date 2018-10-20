@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
<h1>
Precaución
<small>Precaución Responsable</small>
</h1>
<ol class="breadcrumb">
<li><a href="#"><i class="fa fa-exclamation-triangle"></i> Precaución</a></li>
<li class="active">Responsable</li>
</ol>
</section>
<section class="content">
<div class="row">
<!-- left column -->
<div class="col-md-12">
<!-- general form elements -->
<div class="box box-success">
<div class="box-header with-border">
<h3 class="box-title">Editar precaución</h3>
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
<form role="form" method="POST" action="{{route('responsable.update',$responsables->idprecaucion_responsable)}}" >
{!!method_field('PUT')!!}
{!!csrf_field()!!}
<div class="box-body col-md-12">
<div class="form-group">
<label for="direccion_fab">Nombre de la precaución</label>
<input type="text" class="form-control" name="precaucion_responsable" value="{{$responsables->precaucion_responsable}}">
</div>
</div>
<!-- /.box-body -->
<div class="box-footer">
<a href="{{route('responsable.index')}}">
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

@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
<h1>
Precaución
<small>Precaución responsable</small>
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
<h3 class="box-title">Detalles</h3>
</div>
<!-- /.box-header -->
<!-- form start -->
<div class="box-body col-md-12">
<div class="form-group">
<label for="direccion_fab">Código de precaución</label>
<p>{{$responsables->idprecaucion_responsable}}</p>
</div>
<div class="form-group">
<label for="telefono_fab">Precaución</label>
<p>{{$responsables->precaucion_responsable}}</p>
</div>
</div>
<!-- /.box-body -->
<div class="box-footer">
<a href="{{route('responsable.index')}}">
<button type="button" name="atras" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> </button>
</a>
</div>
</div>
<!-- /.box -->
</div>
</div>
</section>
@endsection

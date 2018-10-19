@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
  <h1>
  Mantenimiento
  <small>Área de mantenimiento</small>
  </h1>
  <ol class="breadcrumb">
  <li><a href="#"><i class="fa 	fa fa-building-o"></i> Mantenimiento</a></li>
  <li class="active">Área</li>
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
<label for="direccion_fab">Código del área de mantenimiento</label>
<p>{{$areas->idarea_mantenimiento}}</p>
</div>
<div class="form-group">
<label for="telefono_fab">Área de mantenimiento</label>
<p>{{$areas->area_mantenimiento}}</p>
</div>
</div>
<!-- /.box-body -->
<div class="box-footer">
<a href="{{route('areamantenimiento.index')}}">
<button type="button" name="atras" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> </button>
</a>
</div>
</div>
<!-- /.box -->
</div>
</div>
</section>
@endsection

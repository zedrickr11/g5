@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
<h1>
Peligro
<small>Naturaleza peligro</small>
</h1>
<ol class="breadcrumb">
<li><a href="#"><i class="fa fa-times-circle-o"></i> Peligro</a></li>
<li class="active">Naturaleza</li>
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
<label for="direccion_fab">Código del peligro</label>
<p>{{$naturalezas->idnaturaleza_peligro}}</p>
</div>
<div class="form-group">
<label for="telefono_fab">Naturaleza del peligro</label>
<p>{{$naturalezas->naturaleza_peligro}}</p>
</div>
</div>
<!-- /.box-body -->
<div class="box-footer">
<a href="{{route('naturaleza.index')}}">
<button type="button" name="atras" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> </button>
</a>
</div>
</div>
<!-- /.box -->
</div>
</div>
</section>
@endsection

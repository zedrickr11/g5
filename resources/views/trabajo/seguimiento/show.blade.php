@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
  <h1>
  Trabajo
  <small>Seguimiento de trabajo</small>
  </h1>
  <ol class="breadcrumb">
  <li><a href="#"><i class="fa fa-suitcase"></i> Trabajo</a></li>
  <li class="active">Seguimiento de trabajo</li>
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
<p>{{$seguimientos->idseguimiento}}</p>
</div>
<div class="form-group">
<label for="telefono_fab">Nombre del responsable</label>
<p>{{$seguimientos->responsable_seguimiento}}</p>
</div>
<div class="form-group">
  <label for="direccion_fab">No de solicitud</label>
  <br>
@foreach($solicitudes as $s)
    @if ($s->idsolitud_trabajo==$seguimientos->solitud_trabajo_idsolitud_trabajo)
    <p>{{$s->numero}}</p>
  @endif
   @endforeach
</div>

<div class="form-group">
<label for="telefono_fab">Fecha</label>
<p>{{$seguimientos->fecha_seguimiento}}</p>
</div>
</div>
<!-- /.box-body -->
<div class="box-footer">
<a href="{{route('seguimiento.index')}}">
<button type="button" name="atras" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> </button>
</a>
</div>
</div>
<!-- /.box -->
</div>
</div>
</section>
@endsection

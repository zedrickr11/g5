@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
  <h1>
  Trabajo
  <small>Solicitud de Trabajo</small>
  </h1>
  <ol class="breadcrumb">
  <li><a href="#"><i class="fa fa-suitcase"></i> Trabajo</a></li>
  <li class="active">Solicitud de Trabajo</li>
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
<div class="box-body col-md-6">
  <div class="form-group">
  <label for="direccion_fab">No de solicitud</label>
  <p>{{$solicitudes->numero}}</p>
  </div>

  <div class="form-group">
    <label for="estado">Compra de Material</br>
    @if ($solicitudes->compra_material==1)
      <input type="checkbox" checked disabled>
    @else
      <input  type="checkbox" disabled>
    @endif
    </label>
  </div>


<div class="form-group">
<label for="direccion_fab">Solicitud dirigida</label>
<p>{{$solicitudes->dirigido_solitud_trabajo}}</p>
</div>
<div class="form-group">
<label for="direccion_fab">Jefe</label>
<p>{{$solicitudes->edificio_solitud_trabajo}}</p>
</div>
</div>


<div class="box-body col-md-6">
<div class="form-group">
<label for="direccion_fab">Fecha</label>
<p>{{$solicitudes->fecha}}</p>
</div>




<div class="form-group">
  <label for="solicitudes">Contratar Trabajo</br>
  @if ($solicitudes->contratar_trabajo==1)
    <input type="checkbox" checked disabled>
  @else
    <input  type="checkbox" disabled>
  @endif
</label>
</div>


<div class="form-group">
<label for="direccion_fab">Puesto dirigido</label>
<p>{{$solicitudes->puesto_dirigido_solitud_trabajo}}</p>
</div>
<div class="form-group">
<label for="direccion_fab">Edificio</label>
<p>{{$solicitudes->edificio_solitud_trabajo}}</p>
</div>
</div>





<!-- /.box-body -->
<div class="box-footer">
<a href="{{route('solicitud.index')}}">
<button type="button" name="atras" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> </button>
</a>
</div>
</div>
<!-- /.box -->
</div>
</div>
</section>
@endsection

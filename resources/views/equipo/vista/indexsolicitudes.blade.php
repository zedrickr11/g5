@extends ('layouts.admin')
@section ('contenido')
<section class="content-header">
  <h1>
  Trabajo
  <small>Solicitud de Trabajo</small>
  </h1>
  <ol class="breadcrumb">
  <li><a href="#"><i class="fa 	fa-suitcase"></i> Trabajo</a></li>
  <li class="active">Solicitud de Trabajo</li>
  </ol>
</section>
<section class="content">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="box">

<!-- /.box-header -->
<div class="box-body">

<div class="col-md-12">
<div class="table-responsive">
<table  class="table table-bordered table-striped">
<thead>
<tr>
<th>Id</th>
<th>Numero</th>
<th>Equipo</th>
<th>Fecha</th>
<th>Descripcíon</th>
<th>Opciones</th>
</tr>
</thead>
<tbody>
@foreach ($solic as $s)
<tr>
<td>{{ $s->idsolitud_trabajo}}</td>
<td>{{ $s->num}}</td>
<td>{{ $s->idequipo}}</td>
<td>{{ $s->fecha}}</td>
<td>{{ $s->descripcion}}</td>
<td>


  <a href="{{route('solicitud.ficha',  $s->idsolitud_trabajo)}}"  target="_blank">
    <button type="button" class="btn btn-success btn-sm" name="button"><span class="fa fa-edit"></span></button>
  </a>


  <a href="{{route('solicitud.show',$s->idsolitud_trabajo)}}">

<button type="button" class="btn btn-info btn-sm" name="button"><span class="glyphicon glyphicon-info-sign"></span> </button>
</a>

<a href="{{route('seguimiento',$s->idsolitud_trabajo)}}" target="_blank">
<button type="button"   class="btn btn-warning"><span ></span>Seguimiento</button>
</a>

<!--
<form style="display: inline" method="POST" action="{{route('solicitud.destroy',$s->idsolitud_trabajo)}}">
{!!method_field('DELETE')!!}
{!!csrf_field()!!}
<button type="submit" class="btn btn-danger btn-sm" name="button"><span class="glyphicon glyphicon-trash"></span> </button>
</form>
-->
</td>
</tr>
@endforeach
</tbody>
<tfoot>
</tfoot>
</table>


</div>
</div>
</div>
<!-- /.box-body -->
</div>
<!-- /.box -->
<!-- /.box -->
</div>
<!-- /.col -->
</div>
</section>
@endsection

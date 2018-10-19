@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
  <h1>
  Trabajo
  <small>Permiso de trabajo</small>
  </h1>
  <ol class="breadcrumb">
  <li><a href="#"><i class="fa fa-suitcase"></i> Trabajo</a></li>
  <li class="active">Permiso de trabajo</li>
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
  <div class="box-body col-md-6">
<div class="form-group">
<label for="direccion_fab">Id</label>
<p>{{$permisos->idpermiso_trabajo}}</p>
</div>
<div class="form-group">
<label for="telefono_fab">No. de solicitud</label>
<p>{{$permisos->num}}</p>
</div>
</div>
  <div class="box-body col-md-6">
<div class="form-group">
<label for="telefono_fab">No. de permiso</label>
<p>{{$permisos->num_permiso}}</p>
</div>
<div class="form-group">
<label for="telefono_fab">Fecha</label>
<p>{{$permisos->fecha}}</p>
</div>
</div>
<div class="form-group">
<label for="telefono_fab">Descripción</label>
<p>{{$permisos->descripcion}}</p>
</div>


<div class="row">
    <div class="">
        <div class="panel-body">

            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                <table id="detalles" class="table table-striped table-bordered table-condensed table-hover">
                    <thead style="background-color:#2ab863">
                        <th>Tipo de trabajo</th>
                        <th>Descripción</th>
                    </thead>
                    <tfoot>
                    </tfoot>
                    <tbody>
                        @foreach($detallep as $det)
                        <tr>
                            <td>{{$det->tipo}}</td>
                            <td>{{$det->descripcion_detalle_tipo_trabajo_permiso}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
             </div>
        </div>
    </div>

</div>
<div class="row">
    <div class="">
        <div class="panel-body">

            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                <table id="detalles" class="table table-striped table-bordered table-condensed table-hover">
                    <thead style="background-color:#2ab863">
                        <th>Naturaleza peligro </th>

                    </thead>
                    <tfoot>
                    </tfoot>
                    <tbody>
                        @foreach($detallesn as $det)
                        <tr>
                            <td>{{$det->naturaleza}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
             </div>
        </div>
    </div>

</div>
<div class="row">
    <div class="">
        <div class="panel-body">

            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                <table id="detalles" class="table table-striped table-bordered table-condensed table-hover">
                    <thead style="background-color:#2ab863">
                        <th>Responsable</th>

                    </thead>
                    <tfoot>
                    </tfoot>
                    <tbody>
                        @foreach($detallesr as $det)
                        <tr>
                            <td>{{$det->responsable}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
             </div>
        </div>
    </div>

</div>
<div class="row">
    <div class="">
        <div class="panel-body">

            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                <table id="detalles" class="table table-striped table-bordered table-condensed table-hover">
                    <thead style="background-color:#2ab863">
                        <th>Ejecutante </th>

                    </thead>
                    <tfoot>
                    </tfoot>
                    <tbody>
                        @foreach($detallese as $det)
                        <tr>
                            <td>{{$det->ejecutante}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
             </div>
        </div>
    </div>

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

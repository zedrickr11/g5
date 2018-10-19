@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
  <h1>
  Trabajo
  <small>Solicitud de Trabajo</small>
  </h1>
  <ol class="breadcrumb">
  <li><a href="#"><i class="fa fa-suitcase"></i> Trabajo</a></li>
  <li class="active">Solicitud de trabajo</li>
  </ol>
</section>
<section class="content">
  <div class="box box-success">
    <div class="box-header with-border">
      <h3 class="box-title">Detelle</h3>
    </div>
  <div class="box-body">
    <div class="row">

     <div class="box-body col-md-6">
       <div class="form-group">
             <label for="proveedor">No. de solicitud</label>
             <p>{{$solicitudes->numero}}</p>
       </div>
       <div class="form-group">
             <label for="proveedor">Compra de material</label>
             @if ($solicitudes->compra_material==1)
            <input type="checkbox" checked disabled>
            @else
            <input  type="checkbox" disabled>
            @endif
           </div>
           <div class="form-group">
                 <label for="proveedor">Solicitud dirigida</label>
                 <p>{{$solicitudes->dirigido_solitud_trabajo}}</p>
               </div>
               <div class="form-group">
                     <label for="proveedor">Jefe</label>
                     <p>{{$solicitudes->jefe_solitud_trabajo}}</p>
                   </div>

     </div>
     <div class="box-body col-md-6">
       <div class="form-group">
             <label for="proveedor">Fecha de solicitud</label>
             <p>{{$solicitudes->fecha}}</p>
       </div>
       <div class="form-group">
             <label for="proveedor">Contratar trabajo</label>
             @if ($solicitudes->contratar_trabajo==1)
            <input type="checkbox" checked disabled>
            @else
            <input  type="checkbox" disabled>
            @endif
           </div>
           <div class="form-group">
                 <label for="proveedor">Puesto dirigido</label>
                 <p>{{$solicitudes->puesto_dirigido_solitud_trabajo}}</p>
               </div>
               <div class="form-group">
                     <label for="proveedor">Edificio</label>
                     <p>{{$solicitudes->edificio_solitud_trabajo}}</p>
                   </div>
      </div>
   <div class="box-body col-md-6">
     <div class="form-group">
           <label for="proveedor">Equipo</label>
           <p>{{$solicitudes->equipo}}</p>
         </div>
   </div>
   <div class="box-body col-md-12">
     <div class="form-group">
           <label for="proveedor">Descripción</label>
           <p>{{$solicitudes->equipo}}</p>
         </div>
   </div>



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
                            @foreach($detalles as $det)
                            <tr>
                                <td>{{$det->tipo}}</td>
                                <td>{{$det->descrpcion_detalle_tipo_trabajo}}</td>
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
                            <th>Área de mantenimiento </th>

                        </thead>
                        <tfoot>
                        </tfoot>
                        <tbody>
                            @foreach($detalless as $det)
                            <tr>
                                <td>{{$det->area}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                 </div>
            </div>
        </div>

    </div>
  </div>
  <div class="box-footer">
  <a href="{{route('solicitud.index')}}">
  <button type="button" name="atras" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> </button>
  </a>
  </div>
  </div>
</section>
<script>
$('#liCompras').addClass("treeview active");
$('#liIngresos').addClass("active");
</script>
@endsection

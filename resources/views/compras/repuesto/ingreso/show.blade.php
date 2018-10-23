@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
      <h1>
        Compras
        <small>Insumos</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-tv"></i> Compras</a></li>
        <li class="active">Insumos</li>
      </ol>
</section>
 <section class="content">
   <div class="box box-success">
     <div class="box-header with-border">
       <h3 class="box-title">Detelle</h3>
     </div>
   <div class="box-body">
     <div class="row">
       <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
         <div class="form-group">
               <label for="proveedor">Proveedor</label>
               <p>{{$ingreso->nombre}}</p>
             </div>
       </div>
       <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
         <div class="form-group">
           <label>Tipo Comprobante</label>
           <p>{{$ingreso->tipo_comprobante}}</p>
         </div>
       </div>
       <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
             <div class="form-group">
                 <label for="serie_comprobante">Serie Comprobante</label>
                 <p>{{$ingreso->serie_comprobante}}</p>
             </div>
         </div>
         <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
             <div class="form-group">
                 <label for="num_comprobante">Número Comprobante</label>
                 <p>{{$ingreso->num_comprobante}}</p>
             </div>
         </div>

     </div>
     <div class="row">
         <div class="">
             <div class="panel-body">

                 <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                     <table id="detalles" class="table table-striped table-bordered table-condensed table-hover">
                         <thead style="background-color:#2ab863">

                             <th>Artículo</th>
                             <th>Cantidad</th>


                         </thead>
                         <tfoot>


                         </tfoot>
                         <tbody>
                             @foreach($detalles as $det)
                             <tr>
                                 <td>{{$det->articulo}}</td>
                                 <td>{{$det->cantidad}}</td>


                             </tr>
                             @endforeach
                         </tbody>
                     </table>
                  </div>
             </div>
         </div>

     </div>
   </div>
   </div>
</section>
@push ('scripts')
  <script>
  $('#liCompras').addClass("treeview active");
  $('#liIngresosR').addClass("active");
  </script>
@endpush
@endsection

@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
      <h1>
        Equipo
        <small>Configuración de los correlativos</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-tv"></i> Equipo</a></li>
        <li class="active">Configuración de los correlativos</li>
      </ol>
</section>
 <section class="content">
<div class="row">
 <!-- left column -->
 <div class="col-md-12">
   <!-- general form elements -->
   <div class="box box-success">
     <div class="box-header with-border">
       <h3 class="box-title">Configuración de los correlativos</h3>
     </div>
     <!-- /.box-header -->
     <!-- form start -->


       <div class="box-body col-md-12">
         <div class="form-group">
           <label for="grupo">Subgrupo</label>
            <p>{{$confcorrelativo->subgrupo}}</p>
         </div>
         <div class="form-group">
           <label for="inicio">Inicio</label>
            <p>{{$confcorrelativo->inicio}}</p>
         </div>
         <div class="form-group">
           <label for="fin">Fin</label>
            <p>{{$confcorrelativo->fin}}</p>
         </div>
         <div class="form-group">
           <label for="actual">Actual</label>
            <p>{{$confcorrelativo->actual}}</p>
         </div>
         <div class="form-group">
           <label for="estado">Estado <br>
           @if ($confcorrelativo->estado==1)
             <input type="checkbox" checked disabled>
           @else
             <input  type="checkbox" disabled>
           @endif
           </label>

         </div>




       </div>


       <div class="box-footer">

         <a href="{{route('confcorrelativo.index')}}">
            <button type="button" name="atras" class="btn btn-warning">Atrás</button>
          </a>
       </div>

   </div>
   <!-- /.box -->


 </div>

</div>
</section>
@push ('scripts')
<script>
$('#liAreas').addClass("treeview active");
$('#liConfcorr').addClass("active");
</script>

@endpush
@endsection

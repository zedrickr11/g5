@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
      <h1>
        Equipo
        <small>Área</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-tv"></i> Equipo</a></li>
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
       <h3 class="box-title">Nueva Área</h3>
     </div>
     <!-- /.box-header -->
     <!-- form start -->


       <div class="box-body col-md-12">
         <div class="form-group">
           <label for="idarea">Formato</label>
            <p>{{$areas->idarea}}</p>
         </div>
         <div class="form-group">
           <label for="telefono_fab">Nombre del área</label>
            <p>{{$areas->nombre_area}}</p>
         </div>



       </div>


       <div class="box-footer">

         <a href="{{route('area.index')}}">
           <button type="button" name="atras" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> </button>
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
$('#liFormato').addClass("active");
</script>

@endpush
@endsection

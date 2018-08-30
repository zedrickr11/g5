@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
      <h1>
        Equipo
        <small>Grupo</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-tv"></i> Equipo</a></li>
        <li class="active">Grupo</li>
      </ol>
</section>
 <section class="content">
<div class="row">
 <!-- left column -->
 <div class="col-md-12">
   <!-- general form elements -->
   <div class="box box-success">
     <div class="box-header with-border">
       <h3 class="box-title">Grupo</h3>
     </div>
     <!-- /.box-header -->
     <!-- form start -->


       <div class="box-body col-md-12">
         <div class="form-group">
           <label for="idarea">Código</label>
            <p>{{$grupos->idgrupo}}</p>
         </div>
         <div class="form-group">
           <label for="telefono_fab">Nombre del grupo</label>
            <p>{{$grupos->grupo}}</p>
         </div>



       </div>


       <div class="box-footer">

         <a href="{{route('grupo.index')}}">
            <button type="button" name="atras" class="btn btn-warning">Atrás</button>
          </a>
       </div>

   </div>
   <!-- /.box -->


 </div>

</div>
</section>
@endsection

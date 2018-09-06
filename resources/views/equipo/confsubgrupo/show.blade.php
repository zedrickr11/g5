@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
      <h1>
        Equipo
        <small>Configuración de los subgrupos</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-tv"></i> Equipo</a></li>
        <li class="active">Configuración de los subgrupos</li>
      </ol>
</section>
 <section class="content">
<div class="row">
 <!-- left column -->
 <div class="col-md-12">
   <!-- general form elements -->
   <div class="box box-success">
     <div class="box-header with-border">
       <h3 class="box-title">Configuración de los subgrupos</h3>
     </div>
     <!-- /.box-header -->
     <!-- form start -->


       <div class="box-body col-md-12">
         <div class="form-group">
           <label for="grupo">Grupo</label>
            <p>{{$confsubgrupos->grupo}}</p>
         </div>
         <div class="form-group">
           <label for="inicio">Inicio</label>
            <p>{{$confsubgrupos->inicio}}</p>
         </div>
         <div class="form-group">
           <label for="fin">Fin</label>
            <p>{{$confsubgrupos->fin}}</p>
         </div>
         <div class="form-group">
           <label for="actual">Actual</label>
            <p>{{$confsubgrupos->actual}}</p>
         </div>
         <div class="form-group">
           <label for="estado">Estado</label>
            <p>{{$confsubgrupos->estado}}</p>
         </div>




       </div>


       <div class="box-footer">

         <a href="{{route('confsubgrupo.index')}}">
            <button type="button" name="atras" class="btn btn-warning">Atrás</button>
          </a>
       </div>

   </div>
   <!-- /.box -->


 </div>

</div>
</section>
@endsection

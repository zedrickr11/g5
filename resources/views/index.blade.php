@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
  <div class="row">
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3>EQUIPOS</h3>
          <p>Equipos Guardados</p>
        </div>
        <div class="icon">
          <i class="ion  ion-stats-bars"></i>
        </div>
        <a href="{{route('equipo.index')}}" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-green">
        <div class="inner">
          <h3>RUTINAS</h3>

          <p>Rutinas asignadas</p>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
        <a href="{{ route ('ruman.index')}}" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3>SOLICITUD</h3>

          <p>Solicitudes de Trabajo</p>
        </div>
        <div class="icon">
          <i class="ion ion-clipboard"></i>

        </div>
        <a  href="{{route('solicitud.index')}}" class="small-box-footer">Ingresar <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-red">
        <div class="inner">
          <h3>Almacén</h3>
          <p>Insumos-repuestos</p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <a href="#" class="small-box-footer">Ingresar <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
  </div>
</section>

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       MANTENIMIENTOS
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">CALENDARIO</li>
      </ol>
    </section>

  <section class="content">

        <div class="row">

          

          <!--TABS -->
            <div class="col-md-12">
                  <!-- Custom Tabs (Pulled to the right) -->
                  <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs pull-right">
                      <li class=""><a href="#tab_1-1" data-toggle="tab">CORRECTIVO</a></li>
                      <li><a href="#tab_2-2" data-toggle="tab">PREVENTIVO</a></li>
                      <li class="pull-left header"><i class="fa fa-th"></i> CALENDARIOS</li>
                    </ul>

                    <div class="tab-content">

                      <div class="tab-pane fade in active" id="tab_1-1">

                        <div class="box box-solid box-primary">
                        <h2 class="text-center"> Mantenimientos Correctivos</h2>
                        <hr>
                        <div class="box-body ">
                                  <!-- THE CALENDAR 1 -->
                              
                            <div class="col-md-8" id="CalendarioCorrectivo">
                              </div>

                              <div class="col-md-4">
                                <br>
                                <br>
                                <br>
                                <br>
                                <div class="box box-primary">
                                      <div class="box-header with-border">
                                        <h3 class="box-title">INFORMACIÓN</h3>
                                      </div>
                                      <!-- /.box-header -->
                                      <div class="box-body">
                                        
                                          <strong><i class="fa fa-pencil margin-r-6"></i> Codígo de colores</strong>
                          
                                          <p>
                                            <span class="label-lg label-danger"><strong>Mantenimiento pendiente</strong></span>
                                            <span class="label-lg label-success"> <strong>Mantenimiento realizado</strong></span>
                                           
                                          </p>
                                        <hr>

                                        <strong><i class="fa fa-book margin-r-5"></i> MANTENIMIENTOS REALIZADOS: </strong>
                                        <h4>Total de mantenimientos:  {{ $noti->noti }}</h4>
                                        
                                        
                          
                                        <hr>
                          
                                        <strong><i class="fa fa-map-marker margin-r-5"></i> MANTENIMIENTOS PENDIENTES: </strong>
                          
                                        <h4>Total de mantenimientos:  {{ $noti2->noti2 }}</h4>

                          
                                        <hr>
                          
                                        <strong><i class="fa fa-file-text-o margin-r-5"></i> Notas</strong>
                          
                                        <p>El MANTENIMIENTO, es normalmente conocido como el conjunto de actividades desarrolladas con
                                           el fin de conservar las propiedades (inmuebles, equipos médicos, equipos industriales 
                                           hospitalarios instalaciones especiales, herramientas, etc.), en condiciones de funcionamiento
                                          seguro, eficiente y económico, previniendo daños o reparándolos cuando ya se hubieran producido. </p>

                                        <hr>
                          
                                        
                                        <br>
                                        
                          
                                        
                                      </div>
                                      <!-- /.box-body -->
                                    </div>
                                </div>
                                <!-- /.col-md-4 -->
                              </div> 
                                <!-- /.box-body -->

                            </div>
                              
                        </div>
                      
                              <!-- /. box -->
                      
                        
                      <!-- /.tab-pane 2 CALENDARIO PREVENTIVO -->
                      <div class="tab-pane  active  " id="tab_2-2">

                          <div class="box box-solid box-danger">
                              <h2 class="text-center"> Mantenimientos Preventivos</h2>
                              <div class="box-body ">
                                  <div class="col-md-8" id="CalendarioPreventivo">
                                    </div>
      
                                    <div class="col-md-4">
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <div class="box box-primary">
                                              <div class="box-header with-border">
                                                <h3 class="box-title">INFORMACIÓN</h3>
                                              </div>
                                              <!-- /.box-header -->
                                              <div class="box-body">
                                                
                                                  <strong><i class="fa fa-pencil margin-r-6"></i> Codígo de colores</strong>
                                  
                                                  <p>
                                                    <span class="labe-lg label-danger"><strong>Mantenimiento pendiente</strong></span>
                                                    <span class="label-lg label-success"> <strong>Mantenimiento realizado</strong></span>
                                                   
                                                  </p>
                                                  <hr>

                                                  <strong><i class="fa fa-book margin-r-5"></i> MANTENIMIENTOS REALIZADOS: </strong>
                                                  <h4>Total de mantenimientos:  {{ $noti->noti }}</h4>
                                                  
                                                  
                                    
                                                  <hr>
                                    
                                                  <strong><i class="fa fa-map-marker margin-r-5"></i> MANTENIMIENTOS PENDIENTES: </strong>
                                    
                                                  <h4>Total de mantenimientos:  {{ $noti2->noti2 }}</h4>
          
                                    
                                                  <hr>
                                  
                                                <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>
                                  
                                                <p>El MANTENIMIENTO, es normalmente conocido como el conjunto de actividades desarrolladas con
                                                    el fin de conservar las propiedades (inmuebles, equipos médicos, equipos industriales 
                                                    hospitalarios instalaciones especiales, herramientas, etc.), en condiciones de funcionamiento
                                                   seguro, eficiente y económico, previniendo daños o reparándolos cuando ya se hubieran producido. </p>
         </p>
        
                                                <hr>
                                  
                                                
                                              
                                                <br>
                                                
                                  
                                                
                                              </div>
                                              <!-- /.box-body -->
                                            </div>
                                      </div>
                              </div>
                                  <!-- /.box-body -->
                          </div>
                                <!-- /. box -->
                      </div>
                    </div>
                    <!-- /.tab-content -->
                  </div>
                  <!-- nav-tabs-custom -->
              </div>
            </div>   


              <div class="modal  fade" id="modal-success">
                <div class="modal-dialog">
                  <div class="modal-content">

                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span></button>
                          <h3 class="text-success">Nombre Equipo:  <strong id="nombreequipo"></strong></h3>
                          <h3 class=" modal-title text-success">Equipo ID:  <strong id="idequipo"></strong></h3>
                          
                    </div>

                    <div class="modal-body">


                      <form role="form">
                        <div class="box-body">
                          <div class="form-group">
                          
                          <h4 class="text-success"> Estado del mantenimiento:    <strong id="EstadoMan" ></strong><strong> </strong></h4>
                          <h4 class="text-success"> Tiempo estimado del mantenimiento: <strong id="tiempo" >0</strong><strong> H</strong></h4>
                          <h4 class="text-success"> Descripción del mantenimiento:    <strong id="descripcionMantenimiento" ></strong><strong> </strong></h4>
                          <hr>      
                            {{-- <input readonly type="text" class="form-control" id="nombreequipo" placeholder="Equipo"> --}}
                          </div>
                          
                          <div class="form-group">
                            <h1>Opciones</h1>
                          </div>
                        

                          <div class="form-group">
                              <button id="irrutina" target="_blank" class="btn btn-info btn-lg btn-block" data-dismiss="modal"><strong>Realizar Mantenimiento</strong> </button>
                          </div> 

                          <div class="form-group">
                              <button id="verrutina" target="_blank" class="btn btn-info btn-lg btn-block" data-dismiss="modal"><strong>Ver Mantenimiento</strong> </button>
                          </div> 

                          <div class="form-group">
                              <button id="irindexequipo" class="btn btn-success btn-lg btn-block "   data-dismiss="modal">Vista General</button>
                          </div>

                          <div class="form-group">
                            <button id="irhistorial" target="_blank" class="btn btn-success btn-lg btn-block" data-dismiss="modal">Historial de Mantenimientos</button>
                        </div>
                          
                        
                          <div class="form-group">
                              <button id="irsolicitudboton" class="btn btn-success btn-lg btn-block" data-dismiss="modal">Solicitudes del Equipo</button>
                          </div>
                                              
                          
                          <div class="form-group">
                              <button id="irfichaequipo" target="_blank" class="btn btn-success btn-lg btn-block" data-dismiss="modal">Ficha del Equipo</button>
                          </div>

                        


                          {{-- <div class="form-group">
                            <label for="descripcionmantenimiento">Descripcion </label>
                            <input type="text" class="form-control" id="descripcionmantenimiento" placeholder="Descripcion">
                          </div>

                          <div class="form-group">
                            <label for="fechacreacion">Fecha de inicio</label>
                            <input type="text" class="form-control" id="fechacreacion" placeholder="Fecha de inicio">
                          </div>

                          <div class="form-group">
                            <label for="fechafinal">Fecha final</label>
                            <input type="text" class="form-control" id="fechafinal" placeholder="Fecha final">
                          </div>

                          <div class="form-group">
                            <label for="horamantenimiento">Hora</label>
                            <input type="text" class="form-control" id="horamantenimiento" placeholder="Hora">
                          </div>

                          <div class="form-group">
                            <label for="estadonotificacion">Estado</label>
                            <input type="text" class="form-control" id="estadonotificacion " placeholder="Estado">
                          </div> --}}

                          </form>
                          </div>

                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-info pull-left" data-dismiss="modal">CERRAR</button>
                            {{-- <button type="button" class="btn btn-info pull-left" >Modificar</button> --}}
                          
                          </div>
                         
                        </div>
                          
                     
                    </div>
                  <!-- /modal  fade -->
                
            
            
          
      

  </section>




<!-- jQuery 3 
<script src="../bower_components/jquery/dist/jquery.min.js"></script>-->

@push ('scripts')

<!-- CALENDARIO CORRECTIVO -->
  <script>

   $(function () {
     
      var date = new Date()
      var d    = date.getDate(),
          m    = date.getMonth(),
          y    = date.getFullYear()

      $('#CalendarioCorrectivo').fullCalendar({
        header    : {
          left  : 'prev,next today',
          center: 'title',
          right : 'month,agendaWeek'
        },
        buttonText: {
          today: 'HOY',
          month: 'MES',
          week : 'SEMANA',
          day  : 'DÍA'
        },

        // dayClick:function(date,jsEvent,view){

        //   $('#fechacreacion2').val(date.format());

        //   $("#ModalEventos").modal();

        // },
        eventClick:function(calEvent,jsEvent,view){

          var estado = calEvent.estado_rutina;
        

         if( estado == 'REALIZADO'){

           
            $('#irrutina').hide();
            $('#verrutina').show();

          }else {

           $('#irrutina').show();
           $('#verrutina').hide();
           

          }

          $('#idequipo').html(calEvent.title);
          $('#tiempo').html(calEvent.tiempo_estimado_rutina_mantenimiento);
          $('#nombreequipo').html(calEvent.nombre_equipo);
          $('#EstadoMan').html(calEvent.estado_rutina);
          $('#descripcionMantenimiento').html(calEvent.descripcion_noti);
         
          // $('#descripcionmantenimiento').val(calEvent.descripcionmantenimiento);
          // $('#fechacreacion').val(calEvent.start);
          // $('#fechafinal').val(calEvent.end);
          // $('#horamantenimiento').val(calEvent.hora);
          // $('#estadonotificacion').val(calEvent.estadonotificacion);
         
          
          
          


          $( "#irsolicitudboton" ).click(function() {
            window.location.href = ("http://localhost:8000/equipo/vista/indexsolicitudes/").concat(calEvent.title);
          });

           $( "#irindexequipo" ).click(function() {
            window.location.href = ("http://localhost:8000/equipo/principal/").concat(calEvent.title);
          });

           $( "#irfichaequipo" ).click(function() {
            window.location.href = (" http://localhost:8000/equipo/equipo/ficha/").concat(calEvent.title);
          });
          
          $( "#irhistorial" ).click(function() {
            window.location.href = ("#");
          });
          
          $( "#irrutina" ).click(function() {
            window.location.href = (" //localhost:8000/equipo/rutina/ruman/").concat(calEvent.idrutina_mantenimiento).concat("/edit");
          });

           $( "#verrutina" ).click(function() {
            window.location.href = (" //localhost:8000/equipo/rutina/ruman/").concat(calEvent.idrutina_mantenimiento)
          });
          


          

          $("#modal-success").modal();


        },

        
        events: '{!! route('calendarioCorrectivo') !!}',

        editable  : false,
        droppable : true 
       
      })

      
     
    })


    $('#botonParaAgregar').click(function(){

      var NuevoEvento = {

            title          :  $('#nombreequipo2').val(),
            start          :  $('#fechacreacion2').val()+" "+$('#horamantenimiento2').val(),
            end            : $('#fechafinal2').val()+" "+$('#horamantenimiento2').val(),
            backgroundColor: '#f56954', //red
            borderColor    : '#f56954', //red
            idrutina       :  $('#idrutina2').val(),
            descripcionmantenimiento: $('#descripcionmantenimiento2').val(),
            hora           : $('#horamantenimiento2').val(),
            estadonotificacion :  $('#estadonotificacion2').val()
      };

       $('#CalendarioCorrectivo').fullCalendar( 'renderEvent',NuevoEvento);

       $("#ModalEventos").modal('toggle');
       $("#formularioParaIngreso")[0].reset();

    });


  </script>


<!-- CALENDARIO PREVENTIVO -->
<script>


  

  $(function () {
    
    

    var date = new Date()
    var d    = date.getDate(),
        m    = date.getMonth(),
        y    = date.getFullYear()

    $('#CalendarioPreventivo').fullCalendar({
      header    : {
        left  : 'prev,next today',
        center: 'title',
        right : 'month,agendaWeek'
      },
      buttonText: {
        today: 'HOY',
        month: 'MES',
        week : 'SEMANA',
        day  : 'DÍA'
      },

      // dayClick:function(date,jsEvent,view){

      //   $('#fechacreacion2').val(date.format());

      //   $("#ModalEventos").modal();

      // },
      eventClick:function(calEvent,jsEvent,view){

          var estado = calEvent.estado_rutina;
        

         if( estado == 'REALIZADO'){

           
            $('#irrutina').hide();
            $('#verrutina').show();

            }else {

            $('#irrutina').show();
            $('#verrutina').hide();


            }

        $('#idequipo').html(calEvent.title);
        $('#tiempo').html(calEvent.tiempo_estimado_rutina_mantenimiento);
        $('#nombreequipo').html(calEvent.nombre_equipo);
        $('#EstadoMan').html(calEvent.estado_rutina);
        $('#descripcionMantenimiento').html(calEvent.descripcion_noti);
      
       
        // $('#descripcionmantenimiento').val(calEvent.descripcionmantenimiento);
        // $('#fechacreacion').val(calEvent.start);
        // $('#fechafinal').val(calEvent.end);
        // $('#horamantenimiento').val(calEvent.hora);
        // $('#estadonotificacion').val(calEvent.estadonotificacion);
      
          


        $( "#irsolicitudboton" ).click(function() {
          window.location.href = ("http://localhost:8000/equipo/vista/indexsolicitudes/").concat(calEvent.title);
        });

         $( "#irindexequipo" ).click(function() {
          window.location.href = ("http://localhost:8000/equipo/principal/").concat(calEvent.title);
        });

         $( "#irfichaequipo" ).click(function() {
          window.location.href = (" http://localhost:8000/equipo/equipo/ficha/").concat(calEvent.title);
        });
        
        $( "#irhistorial" ).click(function() {
          window.location.href = ("#");
        });

        $( "#irrutina" ).click(function() {
            window.location.href = (" //localhost:8000/equipo/rutina/ruman/").concat(calEvent.idrutina_mantenimiento).concat("/edit");
          });

        $( "#verrutina" ).click(function() {
            window.location.href = (" //localhost:8000/equipo/rutina/ruman/").concat(calEvent.idrutina_mantenimiento)
          });
          



        
        

        $("#modal-success").modal();


      },

      
      events: '{!! route('calendarioPreventivo') !!}',
      
     

      editable  : false,
      droppable : false 
     
    })

    
   
  })


  $('#botonParaAgregar').click(function(){

    var NuevoEvento = {

          title          :  $('#nombreequipo2').val(),
          start          :  $('#fechacreacion2').val()+" "+$('#horamantenimiento2').val(),
          end            : $('#fechafinal2').val()+" "+$('#horamantenimiento2').val(),
          backgroundColor: '#f56954', //red
          borderColor    : '#f56954', //red
          idrutina       :  $('#idrutina2').val(),
          descripcionmantenimiento: $('#descripcionmantenimiento2').val(),
          hora           : $('#horamantenimiento2').val(),
          estadonotificacion :  $('#estadonotificacion2').val()
    };

     $('#CalendarioCorrectivo').fullCalendar( 'renderEvent',NuevoEvento);

     $("#ModalEventos").modal('toggle');
     $("#formularioParaIngreso")[0].reset();

  });


</script>





<script>

$('#liCalendario').addClass("active");

</script>
@endpush

@endsection

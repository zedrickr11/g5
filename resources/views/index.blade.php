@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
  <div class="row">
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3>150</h3>
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
          <h3>53</h3>

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
          <h3>Solicitud</h3>

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
          <h3>Informes</h3>
          <p>Ficha Técnica de Equipo</p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <a href="#" class="small-box-footer">Buscar <i class="fa fa-arrow-circle-right"></i></a>
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
                        <div class="box-body ">
                                <!-- THE CALENDAR 1 -->
                            <div id="CalendarioCorrectivo">

                            </div>
                          </div>
                              <!-- /.box-body -->
                       </div>
                            <!-- /. box -->

                      </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane fade in active " id="tab_2-2">

                        <div class="box box-solid box-danger">
                            <h2 class="text-center"> Mantenimientos Preventivos</h2>
                            <div class="box-body ">
                                  <!-- THE CALENDAR 2 -->
                              <div id="CalendarioPreventivo">

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


            <div class="modal  fade" id="modal-success">
              <div class="modal-dialog">
                <div class="modal-content">

                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span></button>
                         <h3 class=" modal-title text-success">Equipo ID:  <strong id="idequipo"></strong></h3>
                         <hr>
                         <h3 class="text-success">Nombre Equipo:  <strong id="nombreequipo"></strong></h3>
                         <hr><hr>
                         <h3 class="text-success"> Tiempo estimado del mantenimiento: <strong id="tiempo" >0</strong><strong> H</strong></h3>
                         <hr><hr>
                         <h5 class="text-success"> Estado del mantenimiento:  <strong id="EstadoMan" ></strong><strong> </strong></h5>
                         <hr>
                  </div>

                  <div class="modal-body">


                    <form role="form">
                      <div class="box-body">
                        <div class="form-group">

                            
                        
                         <div class=" form-group bg-alert">
                         

                        </div>
                          {{-- <input readonly type="text" class="form-control" id="nombreequipo" placeholder="Equipo"> --}}
                        </div>
                        
                        <br>
                        <br>
                       

                        <div class="form-group">
                            <button id="irrutina" target="_blank" class="btn btn-info btn-lg btn-block" data-dismiss="modal"><strong>Realizar Mantenimiento</strong> </button>
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

                       

                        <br>
                        <br>
                        <br>

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


                        </div>

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-info pull-left" data-dismiss="modal">CERRAR</button>
                          {{-- <button type="button" class="btn btn-info pull-left" >Modificar</button> --}}
                        
                        </div>
                        </div>
                         
                     </form>
                  </div>
                <!-- /.modal-content -->
                </div>
              <!-- /.modal-dialog -->
            </div>
              
          
            


            <div class="modal modal-success fade" id="ModalEventos">
              <div class="modal-dialog">
                <div class="modal-content">

                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"> MANTENIMIENTO CORRECTIVO</h4>
                  </div>

                  <div class="modal-body">


                    <form role="form" id="formularioParaIngreso">
                      <div class="box-body">

                        <div class="form-group">
                          <label for="nombreequipo2">Equipo</label>
                          <input type="text" class="form-control" id="nombreequipo2" placeholder="Equipo">
                        </div>

                        <div class="form-group">
                          <label for="idrutina2">Numero de mantenimiento</label>
                          <input type="text" class="form-control" id="idrutina2" placeholder=" numero de Mantenimniento">
                        </div>

                        <div class="form-group">


                          <label for="descripcionmantenimiento2">Descripcion </label>
                          <textarea id="descripcionmantenimiento2" placeholder="Descripcion" rows="4" cols="88" style="color:black;"></textarea>

                        </div>

                        <div class="form-group">
                          <label for="fechacreacion2">Fecha de inicio</label>
                          <input type="text" class="form-control" id="fechacreacion2" placeholder="Fecha de inicio">
                        </div>

                        <div class="form-group">
                          <label for="fechafinal2">Fecha final</label>
                          <input type="text" class="form-control" id="fechafinal2" placeholder="Fecha final">
                        </div>

                        <div class="form-group">
                          <label for="horamantenimiento2">Hora</label>
                          <input type="text" class="form-control" id="horamantenimiento2" placeholder="Hora" value ="10:30">
                        </div>

                        <div class="form-group">
                          <label for="estadonotificacion2">Estado</label>
                          <input type="text" class="form-control" id="estadonotificacion2 " placeholder="Estado">
                        </div>


                        </div>

                        </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">CERRAR</button>
                          <button type="button" class="btn btn-outline pull-left" >Modificar</button>
                          <button type="button" class="btn btn-outline" id="botonParaAgregar">AGREGAR</button>
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
              </div>
            
            </div>
        

     </section>




<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>


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

          $('#idequipo').html(calEvent.title);
          $('#tiempo').html(calEvent.tiempo_estimado_rutina_mantenimiento);
          $('#nombreequipo').html(calEvent.nombre_equipo);
          $('#EstadoMan').html(calEvent.estado_rutina);
         
          $('#descripcionmantenimiento').val(calEvent.descripcionmantenimiento);
          $('#fechacreacion').val(calEvent.start);
          $('#fechafinal').val(calEvent.end);
          $('#horamantenimiento').val(calEvent.hora);
          $('#estadonotificacion').val(calEvent.estadonotificacion);
          
          


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
          

          $("#modal-success").modal();


        },

        
        events: '/json-calendarioCorrectivo',

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

        $('#idequipo').html(calEvent.title);
        $('#tiempo').html(calEvent.tiempo_estimado_rutina_mantenimiento);
        $('#nombreequipo').html(calEvent.nombre_equipo);
        $('#EstadoMan').html(calEvent.estado_rutina);
        
       
        $('#descripcionmantenimiento').val(calEvent.descripcionmantenimiento);
        $('#fechacreacion').val(calEvent.start);
        $('#fechafinal').val(calEvent.end);
        $('#horamantenimiento').val(calEvent.hora);
        $('#estadonotificacion').val(calEvent.estadonotificacion);
      
          


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



        
        

        $("#modal-success").modal();


      },

      
      events: '/json-calendarioPreventivo',

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



</body>
</html>

    @endsection

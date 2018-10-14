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
        <a href="http://localhost:8000/equipo/equipo" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
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
        <a href="#" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
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
                    <li class="active"><a href="#tab_1-1" data-toggle="tab">CORRECTIVO</a></li>
                    <li><a href="#tab_2-2" data-toggle="tab">PREVENTIVO</a></li>
                    <li class="pull-left header"><i class="fa fa-th"></i> CALENDARIOS</li>
                  </ul>

                  <div class="tab-content">

                    <div class="tab-pane fade in active" id="tab_1-1">

                      <div class="box box-solid box-primary">
                       <h2 class="text-center"> Mantenimientos Correctivos</h2>
                        <div class="box-body ">
                                <!-- THE CALENDAR 1 -->
                            <div id="calendar">

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
                              <div id="calendar2">

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


            <div class="modal modal-success fade" id="modal-success">
              <div class="modal-dialog">
                <div class="modal-content">

                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">AGREGAR MANTENIMIENTO CORRECTIVO</h4>
                  </div>

                  <div class="modal-body">


                    <form role="form">
                      <div class="box-body">

                        <div class="form-group">
                          <label for="nombreequipo">Equipo</label>
                          <input type="text" class="form-control" id="nombreequipo" placeholder="Equipo">
                        </div>

                        <div class="form-group">
                          <label for="idrutina">Numero de mantenimiento</label>
                          <input type="text" class="form-control" id="idrutina" placeholder=" numero de Mantenimniento">
                        </div>

                        <div class="form-group">
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
                        </div>


                        </div>

                        </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">CERRAR</button>
                          <button type="button" class="btn btn-outline pull-left" >Modificar</button>
                          <button type="submit" class="btn btn-outline">AGREGAR</button>
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
              <!-- /.modal-dialog -->
            </div>


      </div>
         <!-- /.row -->

     </section>




<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>



  <script>
    $(function () {

      /* initialize the external events
      -----------------------------------------------------------------*/
      function init_events(ele) {
        ele.each(function () {

          // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
          // it doesn't need to have a start or end
          var eventObject = {
            title: $.trim($(this).text()) // use the element's text as the event title
          }

          // store the Event Object in the DOM element so we can get to it later
          $(this).data('eventObject', eventObject)

          // make the event draggable using jQuery UI
          $(this).draggable({
            zIndex        : 1070,
            revert        : true, // will cause the event to go back to its
            revertDuration: 0  //  original position after the drag
          })

        })
      }

      init_events($('#external-events div.external-event'))

      /* initialize the calendar
      -----------------------------------------------------------------*/
      //Date for the calendar events (dummy data)
      var date = new Date()
      var d    = date.getDate(),
          m    = date.getMonth(),
          y    = date.getFullYear()

      $('#calendar, #calendar2').fullCalendar({
        header    : {
          left  : 'prev,next today',
          center: 'title',
          right : 'month,agendaWeek,agendaDay'
        },
        buttonText: {
          today: 'HOY',
          month: 'MES',
          week : 'SEMANA',
          day  : 'DÍA'
        },

        dayClick:function(date,jsEvent,view){

          $('#fechacreacion2').val(date.format());

          $("#ModalEventos").modal();

        },
        eventClick:function(calEvent,jsEvent,view){

          $('#nombreequipo').val(calEvent.title);
          $('#idrutina').val(calEvent.idrutina);
          $('#descripcionmantenimiento').val(calEvent.descripcionmantenimiento);
          $('#fechacreacion').val(calEvent.start);
          $('#fechafinal').val(calEvent.end);
          $('#horamantenimiento').val(calEvent.hora);
          $('#estadonotificacion').val(calEvent.estadonotificacion);



          $("#modal-success").modal();


        },

        //Random default events
        events: '/json-calendario',

        editable  : true,
        droppable : true, // this allows things to be dropped onto the calendar !!!
        drop      : function (date, allDay) { // this function is called when something is dropped

          // retrieve the dropped element's stored Event Object
          var originalEventObject = $(this).data('eventObject')

          // we need to copy it, so that multiple events don't have a reference to the same object
          var copiedEventObject = $.extend({}, originalEventObject)

          // assign it the date that was reported
          copiedEventObject.start           = date
          copiedEventObject.allDay          = allDay
          copiedEventObject.backgroundColor = $(this).css('background-color')
          copiedEventObject.borderColor     = $(this).css('border-color')

          // render the event on the calendar
          // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
          $('#calendar,#calendar2').fullCalendar('renderEvent', copiedEventObject, true)

          // is the "remove after drop" checkbox checked?
          if ($('#drop-remove').is(':checked')) {
            // if so, remove the element from the "Draggable Events" list
            $(this).remove()
          }

        }
      })

      /* ADDING EVENTS */
      var currColor = '#3c8dbc' //Red by default
      //Color chooser button
      var colorChooser = $('#color-chooser-btn')
      $('#color-chooser > li > a').click(function (e) {
        e.preventDefault()
        //Save color
        currColor = $(this).css('color')
        //Add color effect to button
        $('#add-new-event').css({ 'background-color': currColor, 'border-color': currColor })
      })
      $('#add-new-event').click(function (e) {
        e.preventDefault()
        //Get value and make sure it is not null
        var val = $('#new-event').val()
        if (val.length == 0) {
          return
        }

        //Create events
        var event = $('<div />')
        event.css({
          'background-color': currColor,
          'border-color'    : currColor,
          'color'           : '#fff'
        }).addClass('external-event')
        event.html(val)
        $('#external-events').prepend(event)

        //Add draggable funtionality
        init_events(event)

        //Remove event from text input
        $('#new-event').val('')
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

       $('#calendar').fullCalendar( 'renderEvent',NuevoEvento);

       $("#ModalEventos").modal('toggle');
       $("#formularioParaIngreso")[0].reset();

    });
  </script>
</body>
</html>

    @endsection

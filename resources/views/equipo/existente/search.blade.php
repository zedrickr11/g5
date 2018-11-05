
<form class="" href="javascript:history.back(-1);" method="get">
  {!! csrf_field() !!}
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="col-md-4">
  <div class="form-group">
    <div class="input-group">
      Fecha inicial:<input type="date" class="form-control" name="searchTextfecha1" placeholder="Buscar por ID de equipo..." value="{{$searchTextfecha1}}">
<span class="input-group-btn">
      </div>
  </div>



</div>
<div class="col-md-4">
  <div class="form-group">
    <div class="input-group">
    Fecha final:  <input type="date" class="form-control" id="searchTextfecha2" name="searchTextfecha2" placeholder="Buscar por ID de equipo..." value="{{$searchTextfecha2}}">
<span class="input-group-btn">
      </div>
  </div>


</div>
<div class="col-md-4">
  <br>
<button type="submit" class="btn btn-primary "> <span class="fa fa-fw fa-search"></span> </button></span>
</div>
</div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <div class="col-md-4">
    <div class="form-group">
      <div class="input-group">
Tipo de rutina:
        <select class="form-control" name="searchRutina"  value={{$searchRutina}}>
          <option value="{{$searchRutina}}" selected>@if($searchRutina=='')TODOS @endif
            @if($searchRutina==1) PREVENTIVO @endif
              @if($searchRutina==2) CORRECTIVO @endif
                @if($searchRutina==3) PRUEBA @endif

          </option>
          @if($searchRutina!='')
          <option value="">TODOS</option>
          @endif
            @if($searchRutina!=1)
          <option value="1">PREVENTIVO</option>
            @endif
              @if($searchRutina!=2)
          <option value="2">CORRECTIVO</option>
            @endif
              @if($searchRutina!=3)
          <option value="3">PRUEBA</option>
            @endif

        </select>
    <span class="input-group-btn">
        </div>
    </div>



  </div>

  <div class="col-md-4">
    <div class="form-group">
      <div class="input-group">
Estado de rutina:
          <select class="form-control" name="searchEstado" value={{$searchEstado}}>
          <option value="{{$searchEstado}}" selected>@if($searchEstado=='')TODOS @endif
            @if($searchEstado=='PENDIENTE') PENDIENTE @endif
              @if($searchEstado=='REALIZADO') REALIZADO @endif
                @if($searchEstado=='DESACTIVADO') DESACTIVADO @endif

          </option>
          @if($searchEstado!='')
          <option value="">TODOS</option>
          @endif
            @if($searchEstado!='PENDIENTE')
          <option value="PENDIENTE">PENDIENTE</option>
            @endif
              @if($searchEstado!='REALIZADO')
          <option value="REALIZADO">REALIZADO</option>
            @endif
              @if($searchEstado!=3)
          <option value="DESACTIVADO">DESACTIVADO</option>
            @endif

        </select>
    <span class="input-group-btn">
        </div>
    </div>



  </div>


  <div class="col-md-4">
    <div class="form-group">

      <div class="input-group">

        <span class="input-group-btn">
        </div>
    </div>



  </div>
</div>
<input type="hidden" name="fechaaceptar" value="{{$fechaaceptar}}">
<table id="detalles" class="table table-striped table-bordered table-condensed table-hover">
  <thead style="background-color:#2ab863">

  </thead>
  <tfoot>

  </tfoot>
  <tbody>

  </tbody>
</table>


</form>
@push('scripts')
<script src="{{asset('ajax/jquery.min.js')}}"></script>
<script src="{{asset('ajax/bootstrap.min.js')}}"></script>
<script src="{{asset('ajax/select2.min.js')}}"></script>
<script>



      $(document).ready(function(){
          $("#searchTextfecha2").change(function(){
              //guardo en una variable el valor del INPUT

              var fila='<tr><td><input type="hidden" name="fechaaceptar" value="aceptar"></td></tr>';
              $('#detalles').append(fila);


          });

      });

</script>
@endpush

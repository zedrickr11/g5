<form class="" action="{{route('ruman.index')}}" method="get">
  {!! csrf_field() !!}
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <div class="col-md-6">
    <div class="form-group">
      <div class="input-group">
        Fecha inicial:<input type="date" class="form-control" name="searchTextfecha1" placeholder="Buscar por ID de equipo..." value="{{$searchTextfecha1}}">
  <span class="input-group-btn">
        </div>
    </div>



  </div>
  <div class="col-md-6">
    <div class="form-group">
      <div class="input-group">
      Fecha final:  <input type="date" class="form-control" name="searchTextfecha2" placeholder="Buscar por ID de equipo..." value="{{$searchTextfecha1}}">
  <span class="input-group-btn">
        </div>
    </div>



  </div>
</div>






</form>

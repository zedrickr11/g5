<form class="" action="{{route('confcorrelativo.index')}}" method="get">
  {!! csrf_field() !!}
  <div class="col-md-6">
    <div class="form-group">
      <div class="input-group">
        <input type="text" class="form-control" name="searchText" placeholder="Buscar por subgrupo..." value="{{$searchText}}">
        <span class="input-group-btn">
          <button type="submit" class="btn btn-primary btn-flat glyphicon glyphicon-search "></button>
        </span>
      </div>
    </div>



  </div>



</form>

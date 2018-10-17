

<form class="" action="{{route('externo.index')}}" method="get">
  {!! csrf_field() !!}
  <div class="col-md-6">
    <div class="form-group">
      <div class="input-group">
        <input type="text" class="form-control" name="searchText" placeholder="Buscar por nombre..." value="{{$searchText}}">
        <span class="input-group-btn">
          <button type="submit" class="btn btn-primary "> <span class="fa fa-fw fa-search"></span> </button>
        </span>
      </div>
    </div>



  </div>



</form>

{!! Form::open(array('url'=>'compras/insumo-ingreso','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}
  <div class="col-md-6">
<div class="form-group">
	<div class="input-group">
		<input type="text" class="form-control" name="searchText" placeholder="Buscar..." value="{{$searchText}}">
		<span class="input-group-btn">
			<button type="submit" class="btn btn-primary "> <span class="fa fa-fw fa-search"></span> </button>

		</span>
	</div>
</div>
</div>
{{Form::close()}}

@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
      <h1>
        Hospital
        <small>Tipos de Unidades de Salud</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-tv"></i> Tipo de Unidad</a></li>
        <li class="active">Modificar</li>
      </ol>
</section>
	<section class="content">
<div class="row">
	<!-- left column -->
	<div class="col-md-12">
		<!-- general form elements -->
		<div class="box box-success">
			<div class="box-header with-border">
				<h3 class="box-title">Modificar</h3>
			</div>
			<!-- /.box-header -->
			<!-- form start -->
			<form role="form" method="POST" action="{{route('advertencia.update',$advertencis->idadvertencia)}}" >
				{!!method_field('PUT')!!}
				{!!csrf_field()!!}
				<div class="box-body col-md-12">
					<div class="form-group">
						<label for="direccion_fab">Nombre de la advertencia</label>
						<input type="text" class="form-control" name="nombre_advertencia" value="{{$advertencis->nombre_advertencia}}">
					</div>
          <div class="form-group">
            <label for="direccion_fab">Valor de la advertencia</label>
            <input type="text" class="form-control" name="valor_advertencia" value="{{$advertencis->valor_advertencia}}">
          </div>
          <div class="form-group">
            <label for="direccion_fab">Equipo</label>
            <br>
            <select name="idequipo" value="{{$advertencis->idadvertencia}}">
     @foreach($equipos as $eq)
              @if ($eq->idequipo==$advertencis->idequipo)
            <option value="{{$eq->idadvertencia}}" selected>{{$eq->nombre_equipo}}</option>
            @else
            <option value="{{$eq->idadvertencia}}">{{$eq->nombre_equipo}}</option>
            @endif
             @endforeach
      </select>
          </div>
				</div>

				<!-- /.box-body -->

				<div class="box-footer">

					<input class="btn btn-primary" type="submit" name="" value="Guardar">
				</div>
			</form>
		</div>
		<!-- /.box -->


	</div>

</div>
</section>
@endsection

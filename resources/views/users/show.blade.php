@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
      <h1>
        Seguridad
        <small>Usuarios</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-tv"></i> Seguridad</a></li>
        <li class="active">Usuarios</li>
      </ol>
</section>
	<section class="content">
<div class="row">
	<!-- left column -->
	<div class="col-md-12">
		<!-- general form elements -->
		<div class="box box-success">
			<div class="box-header with-border">
				<h3 class="box-title">Nuevo Usuario</h3>
			</div>

			<!-- /.box-header -->
			<!-- form start -->
			<form role="form" method="POST" action="{{route('usuarios.role')}}" >
					{!! csrf_field() !!}



              <input  type="hidden" class="form-control" name="user_id" value="{{$usuario->id}}">

        <div class="box-body col-md-6">

        <div class="form-group">
        <label for="role_id" class="est">Rol</label>
        <select name="role_id" class="form-control" id="role_id" style="width: 100%" >
          <option value="0" disabled selected>=== Selecciona un rol ===</option>
        @foreach($role as $rol)
          <option value="{{$rol->id}}">{{$rol->display_name}}</option>
           @endforeach
        </select>
        </div>
        {!!$errors->first('role_id','<span class-error>:message</span>')!!}
      </div>

				<!-- /.box-body -->

				<div class="box-footer">
          <div class="col-md-12">
            <a href="{{route('usuarios.index')}}">
              <button type="button" name="atras" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> </button>
            </a>
            <button class="btn btn-danger" type="reset"><span class="glyphicon glyphicon-remove"></span> </button>
            <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-ok"></span> </button>

          </div>
          </div>
			</form>
		</div>
		<!-- /.box -->


	</div>

</div>
</section>
@endsection

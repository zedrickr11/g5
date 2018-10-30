<!DOCTYPE html>
<html lang="es">
<head>
	<title>IGSS | MANTENIMIENTO</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{asset('login/images/igss.png')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login/fonts/iconic/css/material-design-iconic-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login/vendor/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('login/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('login/images/Xela.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST" action="{{route('usuarios.store')}}">
          {!! csrf_field() !!}
					<span class="login100-form-logo">
						<i ><img src="{{asset('login/images/igss.png')}}" alt=""></i>

					</span>
					<br>

						<span class="login100-form-title p-b-34 p-t-27">

						nuevo usuario
						</span>
            <div class="wrap-input100 validate-input" data-validate = "Ingrese su nombre">
              <input required class="input100" type="text" name="name" placeholder="Nombre">
              <span class="focus-input100" data-placeholder="&#xf207;"></span>
              {!!$errors->first('name','<span class-error>:message</span>')!!}
            </div>

						<div class="wrap-input100 validate-input" data-validate = "Correo electrónico">
							<input required class="input100" type="email" name="email" placeholder="Correo Electrónico">
							<span class="focus-input100" data-placeholder="&#xf207;"></span>
                {!!$errors->first('email','<span class-error>:message</span>')!!}
						</div>

						<div class="wrap-input100 validate-input" data-validate="Enter password">
							<input required class="input100" type="password" name="password" placeholder="Contraseña">
							<span class="focus-input100" data-placeholder="&#xf191;"></span>
                    {!!$errors->first('password','<span class-error>:message</span>')!!}
						</div>
						<div class="container-login100-form-btn">
							<button type="submit" class="login100-form-btn">
								Crear
							</button>
						</div>
						<div class="text-center p-t-40">
							<a class="txt1 p-b-34 p-t-27" href="{!! route('login') !!}">
							<h5>¡Iniciar sesión!</h5>
							</a>
						</div>

				</form>
			</div>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="{{asset('login/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('login/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('login/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('login/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('login/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('login/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('login/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('login/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('login/js/main.js')}}"></script>

</body>
</html>

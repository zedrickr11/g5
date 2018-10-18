<!DOCTYPE html>
<html>
<title>Solicitud de Servicios</title>
	<link type="text/css" rel="stylesheet" href="estilos.css" />

  <body>
		<SPAN style="position: absolute; top: -45 px; left: -45 px;">
			</SPAN>
			@foreach($solicitudes as $s)
				<table id="table" width="100%" border="10" cellpadding="5" cellspacing="0" bordercolor="#000000">
					<tr>
						<td id="gris" colspan="3"> 	<div align="center">INSTITUTO GUATEMALTECO DE	SEGURIDAD SOCIAL<br>
							SOLICITUD DE TRABAJO</div>  </td>
						<td padding="0" rowspan="3" ><div align="center">
					<IMG src="{{public_path('dist/img/igsslogo.png')}}" width="70" height="70" BORDER=0>    </td>
					</div></tr>
					<tr>
							<td id="gris"> <div align="center"> No de Solicitud </div></td>
			<td id="gris"> <div align="center"> Dependencia </div></td>


						<td id="gris" colspan="1"> <div align="center"> Fecha</div></td>

			</tr>
			<tr>
				<td align="center"> {{ $s->numero}}</td>
					<td align="center"> {{ $s->edificio_solitud_trabajo}}</td>
					<td align="center">{{ $s->fecha}}</td>
			</tr>

				<tr>
					<td  colspan="2"> <div align="left">Señor: {{$s->dirigido_solitud_trabajo}} </div></td>
						<td  colspan="2"> <div align="left">Equipo: {{$s->idequipo}} </div></td>
				</tr>
				<tr>
					<td  colspan="2"> <div align="left">Puesto: {{ $s->puesto_dirigido_solitud_trabajo}} </div></td>
						<td  colspan="2"><div align="left">Solicitante: {{ $s->jefe_solitud_trabajo}} </div></td>
					</tr>


<!--TIPO DE TRABAJO-->
				<tr>
					<td id="gris" colspan="4"> <div align="left">TIPO DE TRABAJO</div></td>

				</tr>
				@foreach($detalles as $det)
				<tr>
						<td colspan="4" align="center">{{$det->tipo}}</td>

				</tr>
				@endforeach

<!--AREA-->
				<tr>
					<td id="gris" colspan="4"> <div align="left">ÁREA</div></td>
				</tr>
				@foreach($detalless as $det)
				<tr>
						<td  colspan="4" align="center">{{$det->area}}</td>
				</tr>
				@endforeach

<!--REGION Presupuestario-->
				<tr>
					<td id="gris" colspan="4"> <div align="left">CUENTA CON REGIÓN PRESUPUESTARIO</div></td>
				</tr>
				<tr>
					@if ($s->compra_material==1)
					<td id="" colspan="4"> <div align="center"> A) Para Compra de Materiales: SI </div></td>
					 	@else
							<td id="" colspan="4"> <div align="center"> A) Para Compra de Materiales: No</div></td>
							    @endif
				</tr>
				<tr>
						@if ($s->contratar_trabajo==1)
					<td  colspan="4"> <div align="center"> B) Para Contratar los Trabajos: SI  </div></td>
						@else
				<td  colspan="4"> <div align="center"> B) Para Contratar los Trabajos: No </div></td>
					@endif
				</tr>

<!--DESCRIPCION-->
			<tr>
				<td id="gris" colspan="4"> <div align="left"> DESCRIPCION DEL PROBLEMA O SERVICIO SOLICITADO</div></td>
			</tr>

			<tr>
				<td colspan="4" > <div align="center">{{ $s->descripcion}} </div></td>
			</tr>



			<!--FIRMAS-->
							<tr>
								<td id="gris" colspan="4"> <div align="left">FIRMAS</div></td>
							</tr>

							<tr>
								<td   colspan="2" align="center"> <br> <br> <br> <br>_________________________________ <br>Jefe de Departamento<br></td>

										<td   colspan="2"  align="center"><br> <br> <br> <br>_________________________________ <br>Jefe de Dependencia <br></td>
							</tr>


			</table>
@endforeach
	</body>
	</html>

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
						<td id="gris" colspan="3"> 	<div align="center">SOLICITUD DE SERVICIOS DE MANTENIMIENTOS</div>  </td>
						<td rowspan="3" ><div align="center">
					<IMG src="dist/img/iggs.jpg" WIDTH=50 HEIGHT=50 BORDER=0>    </td>
					</div></tr>
					<tr>
						<td id="gris"> <div align="center"> No </div></td>
						<td id="gris" colspan="1"> <div align="center"> Fecha</div></td>
						<td id="negrita" rowspan="2" > <div align="center"> INSTITUTO GUATEMALTECO DE <BR>
						SEGURIDAD SOCIAL (IGGS)</td></div>
			</tr>
			<tr>
				<td > {{ $s->numero}}</td>
					<td>{{ $s->fecha}}</td>
			</tr>


				<tr><td  colspan="4"> <div align="left">Departamento Solicitante: {{ $s->dirigido_solitud_trabajo}} </div></td>	</tr>
				<tr><td  colspan="4"> <div align="left">Ambiente o Dependencia: {{ $s->edificio_solitud_trabajo}}</div></td></tr>
			<tr>
				<td id="gris" colspan="4"> <div align="center"> DESCRIPCION DEL PROBLEMA O SERVICIO SOLICITADO</div></td>
			</tr>

			<tr>
				<td colspan="4" > <div align="left">{{ $s->descripcion}} </div></td>
			</tr>

			<tr>
				<td  colspan="2"><div align="left"> Nombre del solicitante: {{ $s->jefe_solitud_trabajo}} </div></td>
			<td colspan="2">Vo.Bo. Jefe del Servicio: </td>
		</tr>

			</table>
@endforeach
	</body>
	</html>

<!DOCTYPE html>
<html>
<title>Permiso de trabajo</title>
<link type="text/css" rel="stylesheet" href="estilos.css" />
<body>
<SPAN style="position: absolute; top: -45 px; left: -45 px;">
</SPAN>
		@foreach($permisos as $p)
<table id="table" width="100%" border="10" cellpadding="5" cellspacing="0" bordercolor="#000000">
  	<tr>
      <td id="gris" colspan="4"> 	<div align="center">INSTITUTO GUATEMALTECO DE	SEGURIDAD SOCIAL<br>
        PERMISO DE TRABAJO<br>
        MANTENERSE VISIBLE EN EL ÁREA DE TRABAJO
      </div>  </td>
  </tr>

    <tr>
      <td padding="0"   rowspan="4"><div align="center">
    <IMG src="{{public_path('dist/img/igsslogo.png')}}" width="70" height="70" BORDER=0>    </td>
    </div>
    	<td  colspan="3"  > <div align="center">Fecha: {{$p->fecha}}  </div></td>
    </tr>
		<tr>
				<td  colspan="3" > <div align="center">ING-7: </div></td>
			</tr>
<tr>
    <td  colspan="3" > <div align="center">Número de solicitud: {{$p->num}}  </div></td>
  </tr>
<tr>
		<td  colspan="3" > <div align="center">Permiso número : {{$p->num_permiso}}</div></td>
	</tr>


	<!--Descripcion-->
					<tr>
						<td   colspan="4"> <div align="left">Descripción del trabajo: {{$p->descripcion}}</div></td>

					</tr>
					<!--Descripcion-->
									<tr>
										<td   colspan="2"> <div align="left">Herramientas y equipo a utilizar</div></td>
			           	<td   colspan="1"> <div align="left">Propia</div></td>
									<td   colspan="1"> <div align="left">Contratista</div></td>
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

<!--Naturaleza de peligro-->
<tr>
<td id="gris" colspan="4"> <div align="left">NATURALEZA DE LOS PELIGROS EN EL AREA DE TRABAJO</div></td>
</tr>
@foreach($detallesn as $det)
<tr>
<td colspan="4" align="center">{{$det->naturaleza}}</td>
</tr>
@endforeach

<!--Precauciones Responsables-->
<tr>
<td id="gris" colspan="4"> <div align="left"> PRECAUCIONES OBLIGATORIAS PARA EL RESPONSABLE DEL ÁREA / EQUIPO</div></td>
</tr>
@foreach($detallesr as $det)
<tr>
<td colspan="4" align="center">{{$det->responsable}}</td>
</tr>
@endforeach

<!--Precauciones Ejecutante-->
<tr>
<td id="gris" colspan="4"> <div align="left">PRECAUCIONES OBLIGATORIAS PARA EL EJECUTANTE</div></td>
</tr>
@foreach($detallese as $det)
<tr>
<td colspan="4" align="center">{{$det->ejecutante}}</td>
</tr>
@endforeach

<!--Precauciones Ejecutante-->
<tr>
<td id="gris" colspan="2"> <div align="left">INICIO DEL TRABAJO</div></td>
<td   colspan="1"> <div align="left">Interno:</div></td>
<td   colspan="1"> <div align="left">Contratista:</div></td>
</tr>
<tr>
<td  colspan="2"> <div align="left">Ejecutantes  <br> 1  _______________________________________
																								<br><br> 2  _______________________________________
																									<br><br> 3  _______________________________________		<br><br></div></td>
<td  colspan="2"> <div align="left"><br>4 _______________________________________
																			<br><br> 5 _______________________________________
																		<br><br> 6 _______________________________________	<br><br></div></td>
</tr>

<!--Precauciones Ejecutante-->
<tr>
<td id="gris" colspan="4"> <div align="left">REVALIDACIÓN</div></td>
</tr>
<tr>
<td  colspan="1"> <div align="left">Inicio</div></td>
<td  colspan="1"> <div align="left"> </div></td>
<td  colspan="2" id="gris"> <div align="center">Firma </div></td>
</tr>
<tr>
<td  colspan="1"> <div align="left">Fecha</div></td>
<td  colspan="1"> <div align="left"> </div></td>
<td  colspan="2"  > <div align="center">  </div></td>
</tr>
<tr>
<td  colspan="1"> <div align="left">Hora</div></td>
<td  colspan="1"> <div align="left"> </div></td>
<td  colspan="2"  > <div align="center">  </div></td>
</tr>
<tr>
<td  colspan="1"> <div align="left">Responsable área</div></td>
<td  colspan="1"> <div align="left"> </div></td>
<td  colspan="2" > <div align="center"></div></td>
</tr>
<tr>
<td  colspan="1"> <div align="left">Ejecutor del trabajo</div></td>
<td  colspan="1"> <div align="left"> </div></td>
<td  colspan="2" > <div align="center"> </div></td>
</tr>
<tr>
<td  colspan="1"> <div align="left">Vo.Bo. Mantto</div></td>
<td  colspan="1"> <div align="left"> </div></td>
<td  colspan="2" > <div align="center"></div></td>
</tr>
<tr>
<td  colspan="1"> <div align="left">Vo.Bo. SHE</div></td>
<td  colspan="1"> <div align="left"> </div></td>
<td  colspan="2"  > <div align="center"> </div></td>
</tr>

	</table>
  @endforeach
	</body>
</html>

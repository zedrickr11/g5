<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>


div.centrar img {
    display:block;
    margin:auto;

}

p {
    font-family: verdana;
    font-size: 15px;
    text-align: center;

}
</style>
  </head>
  <body onload='javascript:window.print()'>
      <div class="centrar">

        <img  src="data:image/png;base64, {!! base64_encode(QrCode::format('png')
                   ->size(250)
                   ->generate(route('actualizar',$equipo->idequipo))) !!}"
        alt="User profile picture">

        <p >{{ $equipo->idequipo }}</p>


    </div>

  </body>
</html>

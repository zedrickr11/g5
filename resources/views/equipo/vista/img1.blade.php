


<body onload='javascript:window.print()'>
    <img  class="profile-user-img img-responsive " src="data:image/png;base64, {!! base64_encode(QrCode::format('png')
                        ->size(250)
                        ->generate(route('actualizar',$equipo->idequipo))) !!} " alt="User profile picture">

</body>

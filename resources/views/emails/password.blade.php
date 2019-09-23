
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="="utf-8"">

</head>

<body>
  <h2>Olvidaste tu contraseña?</h2>
  <P>No hay ningun problema ahora podras restablecerlo</P>
  <p>Para ello simplemente debes hacer click en:</p><br>



  <a class="boton_personalizado" href="{{ url('password/reset/'.$token) }}">Restablecer contraseña</a>

  <!--<button href="{{ url('password/reset/'.$token) }}" class="btn btn-success" type="button">click aqui</button>
  <a href="{{ url('password/reset/'.$token) }}">
    <img src={{asset('images/logo-principal.png')}} alt="Logo">
  </a>-->

</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="="utf-8"">
</head>
<body>
  <h2>Hola {{$name}}, bienvenido a IMSUR!</h2>
  <P>Por favor confirma tu correo electronico.</P>
  <p>Para ello simplemente debes hacer click en el siguiente enlace:</p>

  <a href="{{url('register/verify/' . $confirmation_code)}}">
    click para confirmar tu correo electronico
  </a>
</body>
</html>

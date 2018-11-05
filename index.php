<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <style><?php include 'css/estilos.css'; ?></style>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <title>Log in</title>
  </head>
  <body>
    <div class="contenedor">
      <div id="login">
        <img id="logo" src="img/logo.png">
        <form action = "scripts/autenticacion.php" method = "post">
            <label> Usuario: </label>
            <input type="text" name="user">
            <label> Contraseña: </label>
            <input type="password" name="password">
            <input type="submit" value = "Ingresar">
        </form>
      </div>
    </div>
    <script
    src="https://code.jquery.com/jquery-3.3.1.js"
    integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous"></script>
  </body>
</html>

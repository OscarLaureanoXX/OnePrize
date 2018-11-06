<?php
//Seccion de sesion activa ---------
session_start();

if(!isset($_SESSION["status"])){
  header("Location: index.php");
}

if($_SESSION["status"] != "admin"){
  header("Location: index.php");
}
//----------------------------------
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Nuevo Repartidor</title>
    <style><?php include 'css/estilos-agregarrepartidor.css'; ?></style>
    <style><?php include 'css/header.css'; ?></style>
  </head>
  <body>
    <?php include_once "includes/templates/header.php" ?>
    <form id="agregar_form" class="clearfix" action="" method="post">
      <h1>Nuevo Repartidor</h1>
      <h3 class="error_msg" id="error_contrasenas">Las contraseñas deben coincidir.</h3>
      <h3 class="error_msg" id="error_vacios">No debes dejar campos vacíos.</h3>
      <fieldset id="info_repartidor">
        <label>Nombre</label>
        <input type="text">
        <label>Número de teléfono</label>
        <input type="text">
      </fieldset>
      <fieldset id="cuenta_repartidor">
        <label>Nombre de usuario</label>
        <input type="text">
        <label>Contraseña</label>
        <input id="contrasena" type="password">
        <label>Confirmar Contraseña</label>
        <input id="contrasena_conf" type="password">
      </fieldset>
      <button id="agregar_button" name=action type=submit>Guardar</button>
    </form>
    <script
    src="https://code.jquery.com/jquery-3.3.1.js"
    integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous"></script>
    <script type="text/javascript" src="scripts/agregarRepartidor.js"></script>
  </body>
</html>

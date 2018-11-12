<?php
//Seccion de sesion activa ---------
require_once "scripts/activeSessionAdmin.php";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Nuevo Repartidor</title>
    <style><?php include 'css/estilos-agregarrepartidor.css'; ?></style>
    <style><?php include 'css/headerRepartidor.css'; ?></style>
  </head>
  <body>
    <?php include_once "includes/templates/headerStandard.php" ?>
    <form id="agregar_form" class="clearfix" action="scripts/creaRepartidor.php" method="post">
      <h1>Nuevo Repartidor</h1>
      <h3 class="error_msg" id="error_contrasenas">Las contraseñas deben coincidir.</h3>
      <h3 class="error_msg" id="error_vacios">No debes dejar campos vacíos.</h3>
      <fieldset id="info_repartidor">
        <label>Nombre</label>
        <input type="text" name="nombre_repartidor">
        <label>Número de teléfono</label>
        <input type="text" name="tel_repartidor">
      </fieldset>
      <fieldset id="cuenta_repartidor">
        <label>Nombre de usuario</label>
        <input type="text" name="username_repartidor">
        <label>Contraseña</label>
        <input id="contrasena" type="password" name="password">
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

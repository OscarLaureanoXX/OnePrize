<?php
//Seccion de sesion activa ---------
require_once "scripts/activeSessionAdmin.php";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Agregar Cliente</title>
    <style><?php include 'css/estilos-agregarcliente.css'; ?></style>
    <style><?php include 'css/headerRepartidor.css'; ?></style>
  </head>
  <body>
    <?php include_once "includes/templates/headerStandard.php" ?>
    <form id="agregar_form" class="clearfix" action="scripts/creaCliente.php" method="post">
      <h1>Nuevo Cliente</h1>
      <h3 class="error_msg" id="error_contrasenas">Las contraseñas deben coincidir.</h3>
      <h3 class="error_msg" id="error_vacios">No debes dejar campos vacíos.</h3>
      <div class="fieldset">
        <span>
          <label>Nombre de la empresa</label>
          <input name="nombre_empresa" type="text">
        </span>
        <span>
          <label>Nombre del Cliente</label>
          <input name="nombre_cliente" type="text">
        </span>
      </div>
      <div class="fieldset">
        <span>
          <label>Dirección de la empresa</label>
          <input name="direccion" type="text">
        </span>
        <span>
          <label>Teléfono</label>
          <input name="telefono" type="text">
        </span>
        <span>
          <label>Correo</label>
          <input name="correo" type="text">
        </span>
      </div>
      <div class="buttons">
        <button id="agregar_button" name=action type=submit>Guardar</button>
        <a href="administrador.php" id="cancelar">Cancelar</a>
      </div>
    </form>
    <script
    src="https://code.jquery.com/jquery-3.3.1.js"
    integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous"></script>
    <script type="text/javascript" src="scripts/agregarRepartidor.js"></script>
  </body>

</html>

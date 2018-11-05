<?php
//Seccion de sesion activa
require_once "scripts/activeSessionAdmin.php";

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Agregar Cliente</title>
    <style><?php include 'css/estilos-agregarcliente.css'; ?></style>
    <style><?php include 'css/header.css'; ?></style>
  </head>
  <body>
    <?php include_once "includes/templates/header.php" ?>
    <form class="clearfix" action="scripts/creaCliente.php" method="post">
      <h1>Nuevo Cliente</h1>
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
        <a id="agregar_cliente"><button name=action type=submit>Guardar</button></a>
        <a href="administrador.php" id="cancelar"><button name=action type=submit>Cancelar</button></a>
      </div>
    </form>
  </body>

</html>

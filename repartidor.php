<?php
//Seccion de sesion activa
require_once "scripts/activeSessionUsers.php";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Repartidor</title>
    <style><?php include 'css/estilos-repartidor.css'; ?></style>
    <style><?php include 'css/header.css'; ?></style>
  </head>
  <body>
    <?php include_once "includes/templates/header.php" ?>
    <div class="contenedor clearfix">
      <div class="main">
        <div id="pedidos">
          <h3>Pedidos</h3>
          <table>
            <thead>
              <tr>
                <th>Id Pedido</th>
                <th>Cliente</th>
                <th>Dirección</th>
                <th>Cantidad</th>
                <th>Total</th>
                <th>Completado</th>
              </tr>
            </thead>
            <tbody>
              <?php
                require_once "scripts/selectPedidosRepartidor.php";
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <script
    src="https://code.jquery.com/jquery-3.3.1.js"
    integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous"></script>
    <script type="text/javascript" src="scripts/scripts.js"></script>
  </body>
</html>

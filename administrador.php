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

//Coneccion a la DB
require_once "scripts/connection.php";

//Consultando cantidad
$sql = "SELECT Cantidad FROM Productos WHERE ProductID = 1";
$result = $link->query($sql);

if ($result->num_rows > 0) {
    // Guardando la cantidad en la variable correspondiente
    while($row = $result->fetch_assoc()) {
        $cantidad = $row["Cantidad"];
    }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <style><?php include 'css/estilos-administrador.css'; ?></style>
    <style><?php include 'css/header.css'; ?></style>
    <title>administrador</title>
  </head>
  <body>
    <?php include_once "includes/templates/header.php" ?>
    <div class="contenedor clearfix">
      <div class="main">
        <div id="pedidos">
          <h3>Pedidos</h3>
          <a id="agregar_pedido" href="agregarPedido.php">+</a>
          <a id="a_historial" href="historial_pedidos_admin.php">Historial</a>
          <table>
            <thead>
              <tr>
                <th>id</th>
                <th>Cliente</th>
                <th>Dirección</th>
                <th>Cantidad</th>
                <th>Total</th>
                <th>Repartidor</th>
                <th>Límite</th>
              </tr>
            </thead>
            <tbody>
              <?php
                require_once "scripts/selectPedidos.php";
              ?>
            </tbody>
          </table>
        </div>
      </div>
      <div class="side">
        <div class="lista puntos-de-venta">
          <div>
            <div class="head">
              <h2>Puntos de venta</h1>
              <a href="agregarCliente.php">+</a>
            </div>
            <ul>
              <?php
                require_once "scripts/selectPuntosdeVenta.php";
              ?>
            </ul>
          </div>
        </div>
        <div class="lista repartidores">
          <div>
            <div class="head">
              <h2>Repartidores</h1>
              <a href="agregarRepartidor.php">+</a>
            </div>
            <ul>
              <li><a href="modificarRepartidor.php">Juan Pedro</a></li>
              <li><a href="modificarRepartidor.php">Juan Pedro</a></li>
              <li><a href="modificarRepartidor.php">Juan Pedro</a></li>
              <li><a href="modificarRepartidor.php">Juan Pedro</a></li>
              <li><a href="modificarRepartidor.php">Juan Pedro</a></li>
              <?php //  require_once "scripts/selectPuntosdeVenta.php"; ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div id="modifica">
      <h2>Cantidad actual:</h2>
      <span id="txtCant"> <?php echo $cantidad?> </span>
      <form class="entrada clearfix" action="scripts/actualizaCantidad.php" method="post">
        <div class="ajustar-cantidad">
          <input type="button" id="resta" value="-">
          <input id="nueva_cantidad" name="cantidad" type="text" value="0">
          <input type="button" id="suma" value="+">
        </div>
        <div class="botones clearfix">
          <input id="agregar" name="accion" type="submit" value="Agregar">
          <input id="quitar" name="accion" type="submit" value="Quitar">
        </div>
      </form>
    </div>
    <div id="backdrop">
    <script
    src="https://code.jquery.com/jquery-3.3.1.js"
    integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous"></script>
    <script type="text/javascript" src="scripts/scripts.js"></script>
    </div>
  </body>
</html>

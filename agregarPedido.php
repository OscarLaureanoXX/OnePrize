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
    <title>Agregar Pedido</title>
    <style><?php include 'css/estilos-agregarpedido.css'; ?></style>
    <style><?php include 'css/header.css'; ?></style>
    <script>
    function informacionCliente(str) {
        if (str == "") {
            document.getElementById("input_cantidad").innerHTML = "";
            document.getElementById("input_total").innerHTML = "";
            return;
        } else {
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("infoCliente").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET","scripts/getInfoCliente.php?q="+str,true);
            xmlhttp.send();
        }
    }
    </script>
  </head>
  <body>
    <?php include_once "includes/templates/header.php" ?>
    <form id="agregar_form" class="clearfix" action="scripts/creaPedido.php" method="post">
      <h1>Nuevo pedido</h1>
      <h3 class="error_msg" id="error_vacios">No debes dejar campos vacíos.</h3>
      <h3 class="error_msg" id="error_cantidad">La cantidad debe ser un número entero positivo.</h3>
      <h3 class="error_msg" id="error_precio">El precio debe ser un número positivo.</h3>
      <fieldset>
        <label>Cliente</label>
        <select name="clientes" onchange="informacionCliente(this.value)">
          <option value="">Selecciona cliente:</option>
          <!-- Obteniendo todos los clientes de la DB -->
          <?php
            require_once "scripts/optionClientes.php";
          ?>
        </select>
      </fieldset>
      <fieldset>
          <div id="infoCliente"><!-- Aqui se despliegan los datos obtenidos automaticamente del cliente --></div>
      </fieldset>
      <fieldset>
        <label>Cantidad</label>
        <input id="input_cantidad" name="cantidad" type="text" onchange="calculaPrecio()"></input>
        <label>Precio Unitario</label>
        <input id="input_precio" type="text" onchange="calculaPrecio()"></input>
        <label>Total</label>
        <input id="input_total" name="total" type="text"></input>
        <script>
            //Funcion que toma la cantidad y el precio unitario para calcular un total del pedido
            function calculaPrecio(){
                var cantidad = parseFloat(document.getElementById("input_cantidad").value);
                var precioUnitario = parseFloat(document.getElementById("input_precio").value);
                document.getElementById("input_total").value = cantidad * precioUnitario;
            }
        </script>
      </fieldset>
      <fieldset>
        <label>Repartidor</label>
        <select name="repartidores">
          <option value="">Selecciona repartidor:</option>
          <!-- Obteniendo todos los repartidores de la DB -->
          <?php
            require_once "scripts/optionRepartidores.php";
          ?>
        </select>
      </fieldset>
      <fieldset>
        <label>Fecha Limite</label>
        <input type="date">
      </fieldset>
      <button id="agregar_button" name=action type=submit>Guardar</button>
    </form>
    <script
    src="https://code.jquery.com/jquery-3.3.1.js"
    integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous"></script>
    <script type="text/javascript" src="scripts/agregarPedido.js"></script>
  </body>
</html>

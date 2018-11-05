<?php
//Seccion de sesion activa
require_once "scripts/activeSessionAdmin.php";

$idCliente = $_GET["id"];

//Conexion DB
require_once "scripts/connection.php";

//Obteniendo datos de los puntos de venta
$sql = "SELECT NombreCliente, NombreEmpresa, DireccionEmpresa, Telefono, Correo FROM Clientes WHERE id = '".$idCliente."' ";

//Consultando
$result = $link->query($sql);


//Desplegando los datos
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $NombreCliente = $row["NombreCliente"];
        $NombreEmpresa = $row["NombreEmpresa"];
        $DireccionEmpresa = $row["DireccionEmpresa"];
        $Telefono = $row["Telefono"];
        $Correo = $row["Correo"];

    }
} 
else {
    echo "Error base de datos modificarCliente ";
}
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <style><?php include 'css/estilos-modificarcliente.css'; ?></style>
    <style><?php include 'css/header.css'; ?></style>
    <title>Modificar Cliente</title>
  </head>
  <body>
    <?php include_once "includes/templates/header.php" ?>
    <form class="clearfix" action="scripts/actualizaCliente.php" method="post">
      <div class="head">
        <h1><?php echo $NombreCliente; ?></h1>
        <span class="buttons">
          <a id="modificar-cliente" href="#">Modificar</a>
          <a id="eliminar-cliente" href="#">Eliminar</a>
        </span>
      </div>
      <div class="fieldset">
        <span>
          <input type="hidden" id="id" name="idCliente" value='<?php echo $idCliente; ?>'>
          <label><?php echo $NombreEmpresa; ?></label>
          <input placeholder="Nombre de la empresa" name="nombre_empresa" type="text" value='<?php echo $NombreEmpresa; ?>' onClick="this.select();">
        </span>
        <span>
          <label><?php echo $NombreCliente; ?></label>
          <input placeholder="Nombre del cliente" name="nombre_cliente" type="text" value='<?php echo $NombreCliente; ?>' onClick="this.select();">
        </span>
      </div>
      <div class="fieldset">
        <span>
          <label><?php echo $DireccionEmpresa; ?></label>
          <input placeholder="Dirección" name="direccion" type="text" value='<?php echo $DireccionEmpresa; ?>' onClick="this.select();">
        </span>
        <span>
          <label><?php echo $Telefono; ?></label>
          <input placeholder="Teléfono" name="telefono" type="text" value='<?php echo $Telefono; ?>' onClick="this.select();">
        </span>
        <span>
          <label><?php echo $Correo; ?></label>
          <input placeholder="Correo" name="correo" type="text" value='<?php echo $Correo; ?>' onClick="this.select();">
        </span>
      </div>
      <div class="buttons">
        <a id="guardar"><button name=action type=submit>Guardar</button></a>
        <a id="cancelar"><button name=action type=submit>Cancelar</button></a>
      </div>
    </form>
    <div id="alert">
      <h1>¿Estás seguro?</h1>
      <a href="scripts/eliminaCliente.php?id=<?php echo $idCliente; ?>">Sí</a>
      <a href="#">No</a>
    </div>
    <div id="backdrop">
    <script
      src="https://code.jquery.com/jquery-3.3.1.js"
      integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
      crossorigin="anonymous"></script>
    <script type="text/javascript" src="scripts/modificarCliente.js"></script>
  </body>
</html>

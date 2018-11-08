<?php
//Seccion de sesion activa ---------
require_once "scripts/activeSessionAdmin.php";


$idRepartidor = $_GET["id"];

//Conexion DB
require_once "scripts/connection.php";

//Obteniendo datos de los repartidores
$sql = "SELECT NombreRepartidor, Telefono FROM Repartidores WHERE id = '".$idRepartidor."' ";

//Consultando
$result = $link->query($sql);

//Desplegando los datos
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $NombreRepartidor = $row["NombreRepartidor"];
        $Telefono = $row["Telefono"];
    }
}
else {
    echo "Error base de datos modificarRepartidor ";
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <style><?php include 'css/estilos-modificarrepartidor.css'; ?></style>
    <style><?php include 'css/header.css'; ?></style>
    <title>Modificar Repartidor</title>
  </head>
  <body>
    <?php include_once "includes/templates/header.php" ?>
    <form class="clearfix" action="scripts/actualizaRepartidor.php" method="post">
      <div class="head">
        <h1><?php echo $NombreRepartidor; ?></h1>
        <span class="buttons">
          <a id="modificar-repartidor" href="#">Modificar</a>
          <a id="eliminar-repartidor" href="#">Eliminar</a>
        </span>
      </div>
      <div class="fieldset">
        <span>
        <input type="hidden" id="id" name="idRepartidor" value='<?php echo $idRepartidor; ?>'>
          <label>Nombre:  <?php echo $NombreRepartidor; ?></label>
          <input placeholder="Nombre de repartidor" name="nombre_repartidor" type="text" value='<?php echo $NombreRepartidor; ?>' onClick="this.select();">
        </span>
        <span>
          <label>Teléfono: <?php echo $Telefono; ?></label>
          <input placeholder="Teléfono del repartidor" name="telefono_repartidor" type="text" value='<?php echo $Telefono; ?>' onClick="this.select();">
        </span>
      </div>
      <div class="buttons">
        <a id="guardar"><button name=action type=submit>Guardar</button></a>
        <a id="cancelar">Cancelar</a>
      </div>
    </form>
    <div id="alert">
      <h1>¿Estás seguro?</h1>
      <a href="scripts/eliminaRepartidor.php?id=<?php echo $idRepartidor; ?>">Sí</a>
      <a id="no_eliminar" href="#">No</a>
    </div>
    <div id="backdrop">
    <script
      src="https://code.jquery.com/jquery-3.3.1.js"
      integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
      crossorigin="anonymous"></script>
    <script type="text/javascript" src="scripts/modificarRepartidor.js"></script>
  </body>
</html>

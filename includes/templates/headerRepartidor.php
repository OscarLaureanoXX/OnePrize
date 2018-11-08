<?php
//Sesion activa
require_once "scripts/activeSessionUsers.php";

//Conexion DB
require_once "scripts/connection.php";

//Obteniendo nombre del repartidor
$sql = "SELECT id, NombreRepartidor FROM Repartidores WHERE username = '".$_SESSION["username"]."' ";

//Consultando
$result = $link->query($sql);

//Asignando valores
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $NombreRepartidor = $row["NombreRepartidor"];
        $idRepartidor = $row["id"];
    }
}
else {
    echo "Error base de datos modificarRepartidor ";
}
?>

<header class="clearfix">
  <span id="nombre_repartidor">Repartidor: <span><?php echo $NombreRepartidor ?></span></span>
  <a class="transparent_a" href="repartidor.php">
    <img id="logo" src="img/logo.png">
  </a>
  <a id="log_out" href="scripts/logout.php">Cerrar Sesión</a>
</header>

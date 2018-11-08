<?php
//Seccion de sesion activa ---------
require_once "activeSessionAdmin.php";


$idRepartidor = $_GET["id"];

//Conexion DB
require_once "connection.php";

//Obteniendo su username para borrarlo tambien -----------------------------
$sql = "SELECT username FROM Repartidores WHERE id = '".$idRepartidor."' ";

//Consultando
$result = $link->query($sql);

//Desplegando los datos
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $usernameRepartidor = $row["username"];
    }
}
else {
    echo "Error con el username @eliminaRepartidor";
}


//Borrando de la tabla de repartidores ---------------------------------
$sql = "DELETE FROM Repartidores WHERE id = '".$idRepartidor."'; ";

//Borrando de los repartidores
if ($link->query($sql) === TRUE) {
    //echo "Record deleted successfully ". $idRepartidor;
    header("Location: ../administrador.php");
} else {
    echo "Error deleting record: " . $link->error;
}

//Borrando de la tabla de usuarios ----------------------------------
$sql = "DELETE FROM users WHERE username = '".$usernameRepartidor."'; ";

//Borrando de los usuarios
if ($link->query($sql) === TRUE) {
    //echo "Record deleted successfully ". $idRepartidor;
    header("Location: ../administrador.php");
} else {
    echo "Error deleting record: " . $link->error;
}


?>
<?php
//Coneccion a la DB
require_once "connection.php";

//Obteniendo valores de modificarRepartidor.php
$id = $_POST["idRepartidor"];
$NombreRepartidor = $_POST["nombre_repartidor"];
$TelefonoRepartidor = $_POST["telefono_repartidor"];



//Actualizando el cliente
$sql = "UPDATE Repartidores SET NombreRepartidor = '" . $NombreRepartidor . "', Telefono = '". $TelefonoRepartidor ."' WHERE id = ". $id;


if ($link->query($sql) === TRUE) {
    //echo "Record updated successfully";
    //Redirigiendo a la página de administrador
    header("Location: ../administrador.php");
    exit;
} else {
    echo "Error updating record: " . $link->error;
    $_SERVER['HTTP_REFERER'];
}



?>
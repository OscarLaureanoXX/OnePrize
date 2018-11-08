<?php
//Coneccion a la DB
require_once "connection.php";

//Query para marcar como completados los marcados
$sql = "UPDATE Pedidos SET Completado = 1 WHERE id in";
$sql.= "('".implode("','",array_values($_POST['checkbox']))."')";


if ($link->query($sql) === TRUE) {
    //echo "Record deleted successfully";
    header("Location: ../repartidor.php");
} else {
    echo "Error updating record: " . $conn->error;
}
?>
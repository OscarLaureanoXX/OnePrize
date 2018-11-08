<?php
require_once "connection.php";
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
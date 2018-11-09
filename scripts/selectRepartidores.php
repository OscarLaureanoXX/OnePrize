<?php
//Coneccion a la DB
require_once "connection.php";



//Obteniendo datos de los puntos de venta
$sql = "SELECT id, NombreRepartidor, Telefono FROM Repartidores";

//Consultando
$result = $link->query($sql);


//Desplegando los datos
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<li><a href='modificarRepartidor.php?id=" . $row["id"] . "'>". $row["NombreRepartidor"] ."  - ". $row["Telefono"] ."</a></li>";
    }
} 
else {
    echo "No hay repartidores dados de alta";
}
?>
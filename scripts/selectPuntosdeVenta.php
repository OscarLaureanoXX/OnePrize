<?php
//Coneccion a la DB
require_once "connection.php";



//Obteniendo datos de los puntos de venta
$sql = "SELECT id, NombreCliente, NombreEmpresa FROM Clientes";

//Consultando
$result = $link->query($sql);


//Desplegando los datos
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<li><a href='modificarCliente.php?id=" . $row["id"] . "'>". $row["NombreCliente"] ."  - ". $row["NombreEmpresa"] ."</a></li>";
    }
} 
else {
    echo "Error base de datos selectPuntosdeVenta ";
}
?>
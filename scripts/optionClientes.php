<?php

//Coneccion a la DB
require_once "connection.php";

//Obteniendo Telefono y Direccion del cliente
$sql = "SELECT id, NombreCliente FROM Clientes";

//Consultando
$result = $link->query($sql);

//Desplegando los en forma de opciones para el dropdown de agregar pedido
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<option value='".$row["id"] ."'>".$row["NombreCliente"] ."</option>";
    }
} 
else {
    echo "<option value='-1'>0 resultados</option>";
}


?>

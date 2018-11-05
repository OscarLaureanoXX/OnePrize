<?php

//Obteniendo valor recibido de agregarPedido.php
$q = intval($_GET['q']);
    
//Coneccion a la DB
require_once "connection.php";

//Obteniendo Telefono y Direccion del cliente
$sql = "SELECT DireccionEmpresa, Telefono FROM Clientes WHERE id = '". $q ."'";

//Consultando
$result = $link->query($sql);

//Desplegando los datos
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<label>Direccion</label> <input id='input_ciudad' type='text' value='".$row["DireccionEmpresa"] ."' disabled></input>";
        echo "<label>Telefono</label> <input id='input_telefono' type='text' value='".$row["Telefono"] ."' disabled></input>";
    }
} 
else {
    echo "Error con nombre de usuario ". $q;
}

?>
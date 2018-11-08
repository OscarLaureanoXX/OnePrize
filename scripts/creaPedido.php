<?php
//Coneccion a la DB
require_once "connection.php";

//Obteniendo al cliente del form de agregarPedido.php
$cliente = $_POST["clientes"];
//Obteniendo la cantidad de galletas del form de agregarPedido.php
$cantidad = $_POST["cantidad"];
//Obteniendo el total del form de agregarPedido.php
$total = $_POST["total"];
//Obteniendo al repartidor
$repartidor = $_POST["repartidores"];

//echo "cliente: ". $cliente . " cantidad: " . $cantidad . " total: " .$total . " repartidor: ". $repartidor; 


//Haciendo insert en la DB
$sql = "INSERT INTO Pedidos(idCliente,idRepartidor,Cantidad,Precio,FechaLimite,Completado) 
        VALUES ('". $cliente ."','". $repartidor ."',". $cantidad .",".$total .",'18-06-12 10:34:09', 0 );";

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

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
//Obteniendo la fecha limite del pedido
$fecha_limite = $_POST["fecha_limite"];

//echo "cliente: ". $cliente . " cantidad: " . $cantidad . " total: " .$total . " repartidor: ". $repartidor; 

//Consultando cantidad actual
$sql = "SELECT Cantidad FROM Productos WHERE ProductID = 1";

$result = $link->query($sql);

if ($result->num_rows > 0) {
    // Guardando la cantidad en la variable correspondiente
    while($row = $result->fetch_assoc()) {
        $cantidadActual = $row["Cantidad"];
    }
}

//Modificando la cantidad de galletas
$cantNueva = $cantidadActual - $cantidad;

$sql = "UPDATE Productos SET Cantidad = " . $cantNueva . " WHERE ProductID = 1";

if ($link->query($sql) === TRUE) {
    //echo "Record updated successfully";
    //Redirigiendo a la página de administrador
    //header("Location: ../administrador.php");
    //exit;
} else {
    echo "Error updating record: " . $link->error;
    $_SERVER['HTTP_REFERER'];
}

//Creando el nuevo pedido
$sql = "INSERT INTO Pedidos(idCliente,idRepartidor,Cantidad,Precio,FechaLimite,Completado) 
        VALUES ('". $cliente ."','". $repartidor ."',". $cantidad .",".$total .",'".$fecha_limite ."', 0 );";

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

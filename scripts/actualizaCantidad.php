<?php
//Coneccion a la DB
require_once "connection.php";

//Consultando cantidad actual
$sql = "SELECT Cantidad FROM Productos WHERE ProductID = 1";

$result = $link->query($sql);

if ($result->num_rows > 0) {
    // Guardando la cantidad en la variable correspondiente
    while($row = $result->fetch_assoc()) {
        $cantidad = $row["Cantidad"];
    }
}

//Obteniendo la cantidad del form de cantidad
$cant = $_POST["cantidad"];
//Obteniendo la accion que vamos a realizar (sumar o restar)
$accion = $_POST["accion"];

if ($accion === "Agregar"){
	//Sumando la cantidad
	$cantNueva = $cant + $cantidad;
}
else{
	//Restando la cantidad
	$cantNueva = $cantidad - $cant;
}

//Haciendo update en la DB
$sql = "UPDATE Productos SET Cantidad = " . $cantNueva . " WHERE ProductID = 1";

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
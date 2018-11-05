<?php
//Coneccion a la DB
require_once "connection.php";

//Obteniendo valores de modificaCliente.php
$id = $_POST["idCliente"];
$NombreEmpresa = $_POST["nombre_empresa"];
$NombreCliente = $_POST["nombre_cliente"];
$Direccion = $_POST["direccion"];
$Telefono = $_POST["telefono"];
$Correo = $_POST["correo"];


//Actualizando el cliente
$sql = "UPDATE Clientes SET NombreCliente = '" . $NombreCliente . "', NombreEmpresa = '". $NombreEmpresa ."', DireccionEmpresa = '". $Direccion ."', Telefono = '". $Telefono ."', Correo = '". $Correo."' WHERE id = ". $id;


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
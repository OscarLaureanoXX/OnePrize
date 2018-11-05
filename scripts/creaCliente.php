<?php
//Coneccion a la DB
require_once "connection.php";

//Obteniendo el nombre de la empresa del form de agregarCliente.php
$NombreEmpresa = $_POST["nombre_empresa"];
//Obteniendo el nombre del cliente del form de agregarCliente.php
$NombreCliente = $_POST["nombre_cliente"];
//Obteniendo la direccion de agregarCliente.php
$Direccion = $_POST["direccion"];
//Obteniendo el telefono de agregarCliente.php
$Telefono = $_POST["telefono"];
//Obteniendo el correo
$Correo = $_POST["correo"];


//Haciendo insert en la DB
$sql = "INSERT INTO Clientes(NombreCliente, NombreEmpresa, DireccionEmpresa, Telefono, Correo) VALUES ('". $NombreCliente ."','". $NombreEmpresa ."','". $Direccion ."','". $Telefono ."','". $Correo ."');";

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

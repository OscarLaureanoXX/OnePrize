<?php

//Seccion de sesion activa ---------
session_start();

if(!isset($_SESSION["status"])){
  header("Location: index.php");
}

if($_SESSION["status"] != "admin"){
  header("Location: index.php");
}
//----------------------------------


$idCliente = $_GET["id"];

//Conexion DB
require_once "connection.php";

//Query
$sql = "DELETE FROM Clientes WHERE id = '".$idCliente."'; ";

//Borrando
if ($link->query($sql) === TRUE) {
    //echo "Record deleted successfully ". $idCliente;
    header("Location: ../administrador.php");
} else {
    echo "Error deleting record: " . $link->error;
}

?>
<?php
//Coneccion a la DB
require_once "connection.php";

//Obteniendo el telefono del repartidor del form de  agregarRepartidor.php
$TelRepartidor = $_POST["tel_repartidor"];
//Obteniendo el nombre del repartidor del form de agregarRepartidor.php
$NombreRepartidor = $_POST["nombre_repartidor"];
//Obteniendo el nombre de usuario de agregarRepartidor.php
$UsernameRepartidor = $_POST["username_repartidor"];
//Obteniendo la contraseña del repartidor del form de agregarRepartidor.php
$Password = $_POST["password"];

//echo $NombreRepartidor . " " . $TelRepartidor . " " . $UsernameRepartidor . " " . $Password; 

//Haciendo insert en la DB
$sqlUser = "INSERT INTO users (username, password, type) VALUES ('". $UsernameRepartidor ."','". $Password ."','user');";
$sqlRepartidor = "INSERT INTO Repartidores (NombreRepartidor,Telefono,username) VALUES ('". $NombreRepartidor ."',". $TelRepartidor .",'". $UsernameRepartidor ."');";

if ($link->query($sqlUser) === TRUE) {
    if($link->query($sqlRepartidor) === TRUE){
        //Redirigiendo a la página de administrador
        header("Location: ../administrador.php");
        exit;
    }
    else {
        echo "Error updating record: " . $link->error;
        $_SERVER['HTTP_REFERER'];
    }

} else {
    echo "Error 'Nombre de usuario ya existe' updating record: " . $link->error;
    $_SERVER['HTTP_REFERER'];
}


?>
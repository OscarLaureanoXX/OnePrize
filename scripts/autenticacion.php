<?php
$usuario = $_POST["user"];
$password = $_POST["password"];

require_once "connection.php";

session_start();

$sql = "SELECT id, type FROM users WHERE username = '$usuario' and password = '$password'";
$result = $link->query($sql);

$count = $result->num_rows;
$row = $result->fetch_assoc();
// If result matched $myusername and $mypassword, table row must be 1 row
if($count == 1 && $row["type"] == "admin") {
	$_SESSION["status"] = $row["type"];
	$_SESSION["user"] = $row["id"];
	header("Location: ../administrador.php");
}
else if ($count == 1 && $row["type"] == "user"){
	//AQUI LO REDIRIJUIMOS A OTRA PAGINA
	$_SESSION["status"] = $row["type"];
	$_SESSION["username"] = $usuario;
	$_SESSION["userID"] = $row["id"];
	//echo "User id: " . $_SESSION["user"] . " Status: " .$_SESSION["status"];
	header("Location: ../repartidor.php");
}
else{
	echo "Your Login Name or Password is invalid";
}
 
?>
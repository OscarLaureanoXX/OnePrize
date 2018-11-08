<?php

session_start();

if(!isset($_SESSION["status"]) || !isset($_SESSION["userID"]) || !isset($_SESSION["username"])){
	header("Location: index.php");
}

if($_SESSION["status"] != "user"){
	header("Location: index.php");
}

?>
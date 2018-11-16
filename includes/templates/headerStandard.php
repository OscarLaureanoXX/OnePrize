<?php
//Consultando cantidad de galletas
require_once "scripts/consultaCantidad.php";
?>
<header class="clearfix">
  <span style="display:none;" id="txtCant"> <?php echo $cantidad?> </span>
  <a class="transparent_a" href="repartidor.php">
    <img id="logo" src="img/logo.png">
  </a>
  <a id="log_out" href="scripts/logout.php">Cerrar Sesión</a>
</header>

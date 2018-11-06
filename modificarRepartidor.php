<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <style><?php include 'css/estilos-modificarrepartidor.css'; ?></style>
    <style><?php include 'css/header.css'; ?></style>
    <title>Modificar Repartidor</title>
  </head>
  <body>
    <?php include_once "includes/templates/header.php" ?>
    <form class="clearfix" action="" method="post">
      <div class="head">
        <h1>Nombre de repartidor</h1>
        <span class="buttons">
          <a id="modificar-repartidor" href="#">Modificar</a>
          <a id="eliminar-repartidor" href="#">Eliminar</a>
        </span>
      </div>
      <div class="fieldset">
        <span>
          <label>Nombre del repartidor</label>
          <input placeholder="Nombre de repartidor" name="nombre_repartidor" type="text">
        </span>
        <span>
          <label>Teléfono</label>
          <input placeholder="Teléfono del repartidor" name="telefono_repartidor" type="text">
        </span>
      </div>
      <div class="buttons">
        <a id="guardar"><button name=action type=submit>Guardar</button></a>
        <a id="cancelar">Cancelar</a>
      </div>
    </form>
    <div id="alert">
      <h1>¿Estás seguro?</h1>
      <a href="#">Sí</a>
      <a id="no_eliminar" href="#">No</a>
    </div>
    <div id="backdrop">
    <script
      src="https://code.jquery.com/jquery-3.3.1.js"
      integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
      crossorigin="anonymous"></script>
    <script type="text/javascript" src="scripts/modificarrepartidor.js"></script>
  </body>
</html>

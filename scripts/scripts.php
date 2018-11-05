
<script type="text/javascript">
$(document).ready(function(){
  console.log("ready");
  let btnModificar = $("#a_modificar");
  let modal = $("#modifica");
  let backdrop = $("#backdrop");
  let btnSuma = $("#suma");
  let btnResta = $("#resta");
  let inputCantidad = $("#nueva_cantidad");
  let btnAgregar = $("#agregar");
  let btnQuitar = $("#quitar");

  btnModificar.on("click", function(e){
    backdrop.show();
    modal.show();
    inputCantidad.val(0);
	e.preventDefault();
  });

  btnSuma.on("click", function() {
    inputCantidad.val(parseInt(inputCantidad.val()) + 1);
  });

  btnResta.on("click", function() {
    if (parseInt(inputCantidad.val()) > 0) {
      inputCantidad.val(parseInt(inputCantidad.val()) - 1);
    }
  });

  btnAgregar.on("click", function() {
    backdrop.hide();
    modal.hide();
    var cant = inputCantidad.val(parseInt(inputCantidad.val()));
    $.post(
      'scripts/actualiza.php', { 
        cant: cant.val()
      }
    );
    console.log(cant.val());
  });

  btnQuitar.on("click", function() {
    backdrop.hide();
    modal.hide();
  });

  backdrop.on("click", function() {
    backdrop.hide();
    modal.hide();
  });

});
</script>

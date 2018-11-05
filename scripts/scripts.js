$(document).ready(function(){
  let btnModificar = $("#a_modificar");
  let modal = $("#modifica");
  let backdrop = $("#backdrop");
  let btnSuma = $("#suma");
  let btnResta = $("#resta");
  let inputCantidad = $("#nueva_cantidad");
  let btnAgregar = $("#agregar");
  let btnQuitar = $("#quitar");

  let checkboxes = document.querySelectorAll('#pedidos table input[type="checkbox"]');
  checkboxes.forEach(function(elem) {
    elem.addEventListener("input", function() {
        if (elem.checked){
            elem.parentNode.parentNode.classList.add("pedido-completado");
        }
        else {
          elem.parentNode.parentNode.classList.remove("pedido-completado");
        }

    });
  });

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

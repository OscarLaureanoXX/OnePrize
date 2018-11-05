$(document).ready(function(){
  let btnModificar = $("#modificar-cliente");
  let btnGuardar = $("#guardar");
  let btnCancelar = $("#cancelar");
  let btnEliminar = $("#eliminar-cliente");

  let alert = $("#alert");
  let backdrop = $("#backdrop");

  let formInputs = document.querySelectorAll("form .fieldset input");
  let formLabels = document.querySelectorAll("form .fieldset label");

  btnModificar.on("click", function(){
    formInputs.forEach(function(input){
      input.style.display = "block";
    })
    formLabels.forEach(function(input){
      input.style.display = "none";
    })
    btnModificar.hide();
    btnCancelar.show();
    btnGuardar.show();
  });

  btnEliminar.on("click", function(){
    alert.show();
    backdrop.show();
  });

  backdrop.on("click", function() {
    backdrop.hide();
    alert.hide();
  });

});

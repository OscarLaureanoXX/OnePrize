$(document).ready(function(){
  let btnModificar = $("#modificar-cliente");
  let btnGuardar = $("#guardar");
  let btnCancelar = $("#cancelar");
  let btnEliminar = $("#eliminar-cliente");
  let noEliminar = $("#no_eliminar");

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

  btnCancelar.on("click", function(){
    formInputs.forEach(function(input){
      input.style.display = "none";
    })
    formLabels.forEach(function(input){
      input.style.display = "block";
    })
    btnModificar.show();
    btnCancelar.hide();
    btnGuardar.hide();
  });

  btnEliminar.on("click", function(){
    alert.show();
    backdrop.show();
  });

  noEliminar.on("click", function(){
    backdrop.hide();
    alert.hide();
  });

  backdrop.on("click", function() {
    backdrop.hide();
    alert.hide();
  });

});

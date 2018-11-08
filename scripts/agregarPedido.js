$(document).ready(function(){
  let formFields = $("#agregar_form input");
  let formSelects = $("#agregar_form select");
  let btnGuardar = $("#agregar_button");
  let errorVacios = $("#error_vacios");
  let errorCantidad = $("#error_cantidad");
  let errorPrecio = $("#error_precio");
  let inputCantidad = $("#input_cantidad");
  let inputPrecio = $("#input_precio");


  btnGuardar.on("click", function(e){
    limpiarAdvertencias();
    if (!verificarCamposLlenos()) {
      e.preventDefault();
      advertenciaEnCamposVacios();
      errorVacios.slideDown(300);
    }
    else if (!verificarCantidad()){
      e.preventDefault();
      inputCantidad.addClass("error");
      inputCantidad.val("");
      errorCantidad.slideDown(300);
    }
    else if (!verificarPrecio()) {
      e.preventDefault();
      inputPrecio.addClass("error");
      inputPrecio.val("");
      errorPrecio.slideDown(300);
    }
  });

  function verificarCantidad() {
    return parseFloat(inputCantidad.val()) > 0 && parseFloat(inputCantidad.val()) % 1 == 0;
  }

  function verificarPrecio() {
    return parseFloat(inputPrecio.val()) > 0;
  }

  function verificarCamposLlenos() {
    result = true;
    formFields.each(function(){
      if ($(this).val() === "") result = false;
    });
    formSelects.each(function(){
      if ($(this).val() === "") result = false;
    });
    return result;
  }

  function advertenciaEnCamposVacios() {
    formFields.each(function(){
      if ($(this).val() === "")
        $(this).addClass("error");
    });
    formSelects.each(function(){
      if ($(this).val() === "")
        $(this).addClass("error");
    });
  }

  function limpiarAdvertencias() {
    errorVacios.hide();
    errorCantidad.hide();
    errorPrecio.hide();
    formFields.each(function(){
        $(this).removeClass("error");
    });
    formSelects.each(function(){
        $(this).removeClass("error");
    });
  }

/*
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
*/
});

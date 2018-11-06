$(document).ready(function(){
  let formFields = $("#agregar_form input");
  let inputContrasena = $("#contrasena");
  let inputContrasenaConf = $("#contrasena_conf");
  let btnGuardar = $("#agregar_button");
  let errorContrasenas = $("#error_contrasenas");
  let errorVacios = $("#error_vacios");

  btnGuardar.on("click", function(e){
    limpiarAdvertencias();
    if (!verificarCamposLlenos()) {
      e.preventDefault();
      errorContrasenas.hide();
      advertenciaEnCamposVacios();
      errorVacios.slideDown(300);
    }
    else if (inputContrasena.val() !== inputContrasenaConf.val()) {
      e.preventDefault();
      errorVacios.hide();
      inputContrasena.addClass("error");
      inputContrasenaConf.addClass("error");
      inputContrasena.val("");
      inputContrasenaConf.val("");
      errorContrasenas.slideDown(300);
    }
    else {
      errorVacios.hide();
      errorContrasenas.hide();
    }
  });

  function verificarCamposLlenos() {
    result = true;
    formFields.each(function(){
      if ($(this).val() === "") result = false;
    });
    return result;
  }

  function advertenciaEnCamposVacios() {
    formFields.each(function(){
      if ($(this).val() === "")
        $(this).addClass("error");
    });
  }

  function limpiarAdvertencias() {
    formFields.each(function(){
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

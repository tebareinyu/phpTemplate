jQuery(document).on("submit", "#login", function (event) {
  event.preventDefault();

  $("#botonlogin").addClass("disabled");

  $.ajax({
    url: "controller/db/login.php",
    type: "POST",
    dataType: "json",
    data: $("#login").serialize(),
    cache: "false",
    beforeSend: function () {
      M.toast({
        html: "Cargando...",
        classes: "rounded colorP",
        timeRemaining: 50,
      });
    },
  })
    .done(function (data) {
      if (data.acceso == "si") {
        console.log(data);
        window.location.href = "view/dashboard.php";

        //swal ( "PM SCRUM" ,  "Bievenido al sistema" ,  "success" );
        $("#botonlogin").removeClass("disabled");
      } else if (data.acceso == "no") {
        //Usuario Invalido
        swal("Sistema", "Usuario Bloqueado Informar a Desarollo", "info");
        $("#botonlogin").removeClass("disabled");

      }else if (data.error == true) {
        swal("Oops", "Correo o contraseña incorrecta! ", "info");
        $("#botonlogin").removeClass("disabled");
      }
    })
    .fail(function (errordata) {
      console.log(errordata.responseText);
    });
});

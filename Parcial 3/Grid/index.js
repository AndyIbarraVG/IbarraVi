$(document).ready(function () {
    const settings = {
      async: true,
      crossDomain: true,
      url: "./conexion.php",
      method: "GET",
      headers: {
        Accept: "/",
      },
    };
    $.ajax(settings).done(function (response) {
        let tabla = JSON.parse(response);
        console.log(tabla);
    
        $("#jsGrid").jsGrid({
          width: "100%",
          height: "400px",
          inserting: true,
          editing: true,
          sorting: true,
          paging: true,
          data: tabla,
          fields: [
            {
              name: "Nombre",
              type: "text",
              width: 50,
            },
            {
              name: "Apellido",
              type: "text",
              width: 50,
            },
            {
              type: "control",
            },
          ],
        });
      });
    });
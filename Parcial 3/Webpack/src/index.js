import Swal from "sweetalert2";

const alerta = document.querySelector("#btnAlerta")

alerta.addEventListener("click", () => {
    Swal.fire('Usted dio click a este boton')
})

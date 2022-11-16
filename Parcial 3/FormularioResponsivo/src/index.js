import Swal from "sweetalert2";

const Enviar = document.querySelector("#btnEnviar")

Enviar.addEventListener("click", () => {
    Swal.fire('Enviado','Se ha enviado con exito su formulario.','success')
})

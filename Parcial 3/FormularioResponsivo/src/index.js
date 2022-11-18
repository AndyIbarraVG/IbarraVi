import Swal from "sweetalert2";

const Enviar = document.querySelector("#btnEnviar")

Enviar.addEventListener("click", async() => {
    Swal.fire('Enviado','Se ha enviado con exito su formulario.','success')
    
    let respuesta = await fetch('GetRegistro.php');
    let dato = await respuesta.json();
    document.getElementById("Id").value = dato.id
    document.getElementById("Nombre").value = dato.nombre
})

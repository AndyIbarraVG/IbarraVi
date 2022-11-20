import Swal from "sweetalert2";

const Enviar = document.querySelector("#btnEnviar");

Enviar.addEventListener("click", async() => {
    Swal.fire('Enviado','Se ha enviado con exito su formulario.','success')
    let respuesta = await fetch('GetRegistro.php');
    let dato = await respuesta.json();
    document.getElementById("Id").value = dato.id
    document.getElementById("Nombre").value = dato.nombre
    document.getElementById("ApPaterno").value = dato.apellidopaterno
    document.getElementById("ApMaterno").value = dato.apellidomaterno
    document.getElementById("Telefono").value = dato.telefono
    document.getElementById("Correo").value = dato.correo
    document.getElementById("Contraseña").value = dato.contraseña
    document.getElementById("ConfContraseña").value = dato.repetircontraseña
})
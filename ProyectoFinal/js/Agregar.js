document.getElementById('btnAgregar').addEventListener('click',async ()=> {
    const form = new FormData(document.getElementById('Form_Usuario'));

    const response = await fetch('./php/Agregar.php', {
        method: 'POST',
        body: form,
    });
    // res.status==200?
    // swal('Usuario añadido!','','success')
    // :
    // swal('No se pudo añadir el usuario','','error')
    // document.getElementById('Form_Usuario').reset()
});
var btn = document.getElementById("btn");

btn.addEventListener("click",async () =>{
    let headerlist = {"Accept": "*/*"};
    let formNombre = document.getElementById("form");
    let cuerpo = new FormData(formNombre);

    let response = await fetch("http://localhost/IbarraVi/Parcial%203/pdf/crearpdf.php",{
        method: "POST",
        body: cuerpo,
        headers: headerlist
    });
    
    let data = await response.blob();
    console.log(data);
    let archivoURL = URL.createObjectURL(data);
    window.open(archivoURL);
});
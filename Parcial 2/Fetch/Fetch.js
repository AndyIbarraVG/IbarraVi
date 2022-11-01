document.getElementById("btnPeticionFetch").addEventListener("click", () =>{
    fetch("https://api.chucknorris.io/jokes/random")
    .then(respuesta => respuesta.json())
    .then(datoJson => document.getElementById("caja").innerHTML = datoJson.value)
})

document.getElementById("btnPeticionJQuery").addEventListener("click", () =>{
    $.getJSON("https://api.chucknorris.io/jokes/random", (datoJson) =>{
        document.getElementById("caja").innerHTML = datoJson.value
    })
    
})

document.getElementById("btnPeticionFetchAsync").addEventListener("click",async()=>{
    let respuesta = await fetch("https://api.chucknorris.io/jokes/random")
    let dato = await respuesta.json()
    document.getElementById("caja").innerHTML = dato.value
})
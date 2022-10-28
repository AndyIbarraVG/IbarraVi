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
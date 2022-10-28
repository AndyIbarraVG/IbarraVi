function ajax(){
    const http = new XMLHttpRequest();
    const url = 'http://127.0.0.1:5501/Parcial%202/PeticionesAjax/Peticion.html'
    
    http.onreadystatechange = () =>{
        if(this.readyState == 4 && this.status == 200){
            console.log(this.responseText)
            document.getElementById("respuesta").innerHTML = this.responseText;
        }
    }

    http.open("GET", url);
    http.send();
}

document.getElementById("boton").addEventListener("click", ()=>{
    ajax()
})

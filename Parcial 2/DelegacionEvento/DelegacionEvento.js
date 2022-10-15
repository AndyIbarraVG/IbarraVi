const contenedor = document.querySelector("#cont-fondo");

contenedor.addEventListener("click", (e) => {
    console.log(e.target);

    if(e.target.classList.contains("caja2")){
        e.target.classList.toggle("caja2toggle");
    }
    if(e.target.classList.contains("caja3")){
        e.target.classList.toggle("caja3toggle");
    }
    if(e.target.classList.contains("caja4")){
        e.target.classList.toggle("caja4toggle");
    }
    if(e.target.classList.contains("caja6")){
        e.target.classList.toggle("caja6toggle");
    }
    if(e.target.classList.contains("caja7")){
        e.target.classList.toggle("caja7toggle");
    }
    if(e.target.classList.contains("caja8")){
        e.target.classList.toggle("caja8toggle");
    }


});
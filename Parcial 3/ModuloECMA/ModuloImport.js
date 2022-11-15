import * as funciones from "./ModuloNativo.js";
document.getElementById("btn").addEventListener("click",()=>{
    let valor = document.getElementById("cad").value;
    let valorM = funciones.mayusculas(valor);
    document.getElementById("cadM").value = valorM;
})
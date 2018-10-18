let contenedores = document.querySelectorAll(".js-contenedor");
let opciones = document.querySelector("#js-select");
let boton = document.querySelector("#js-button");
console.log(boton);
let contenedoresOpcion = [];
contenedores.forEach(contenedor =>{
    let opcion = document.createElement("option");
    opcion.setAttribute("value", + contenedor.getAttribute("nombre"));
    opcion.innerHTML = contenedor.getAttribute("nombre");
    //console.log(contenedoresOpcion);
    contenedoresOpcion.push(opcion)
})
contenedoresOpcion.forEach(opcionesLocas =>{
    opciones.appendChild(opcionesLocas);
})
console.log(contenedoresOpcion);

boton.addEventListener("click", ()=>{
    console.log(opciones.
})
let botones = document.querySelectorAll(".botonBorrarImg");
botones.forEach(boton => {
    boton.addEventListener("click", ()=>{
        borrarImagen(boton.getAttribute("js-id"), boton.parentNode);
    })
});
function borrarImagen(idImagen, contenedor){

    fetch("http://localhost/proyectos/RetroViewsV3/api/imagenes/" + idImagen, 
    {method: 'DELETE',
    mode: 'cors',
    cache: 'default',
    headers: {'Content-Type': 'application/json',
    'user': user,
    'pass': pass},
    }
    ).then(resp =>{
        if(resp.ok){
            contenedor.remove();
        }
    })
}
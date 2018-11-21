// fetch("http://localhost/proyectos/RetroViewsV3/api/test2").then(resp =>{
//     resp.json().then(objeto=>{
//         console.log(objeto);
//     })
// })
"use strict";
let user = "";
let pass = "";
fetch("api/getSessionData").then(response =>{
    response.json().then(objeto =>{
        user = objeto.user;
        pass = objeto.pass;
    })
})
let boton = document.querySelector(".js-comment-loader");
let container = document.querySelector(".js-comments-container");
let templateCreador;
let templateComment;

document.querySelector("#submit").addEventListener("click", ()=>{
    let json = 
    {user: document.querySelector("#user").value,
    contenido_comentario: document.querySelector("#contenido_comentario").value,
    puntaje: document.querySelector("#puntaje").value,
    id_review: document.querySelector("#id_review").value,
    };
    let data = JSON.stringify(json);
    fetch("api/comentarios", {
        body: data,
        method: 'POST',
        headers: {'Content-Type': 'application/json',
                'user': user,
                'pass': pass},
    }).then(respuesta =>{
        alert(respuesta.status);
    })
})

boton.addEventListener("click", ()=>{
    boton.classList.toggle("d-none");
    fetch('js/templates/comment.handlebars').then(response =>{
        response.text().then(template =>{
            templateComment = Handlebars.compile(template); // compila y prepara el template
            getComments();
        })
    })  
})

function getComments(){
    fetch("api/comentarios?id_review="+ container.getAttribute("idReview")).then(resp =>{
        resp.json().then(objeto=>{
            showComments(objeto);
        })
    })
}

function showComments(objeto){
    let context = { // como el assign de smarty
        comentarios: objeto 
    };
    let html = templateComment(context);
    container.innerHTML += html;
}
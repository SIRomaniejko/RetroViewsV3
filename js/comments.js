"use strict";
document.querySelector('#submit').addEventListener('click',getData);

// fetch("http://localhost/proyectos/RetroViewsV3/api/test2").then(resp =>{
//     resp.json().then(objeto=>{
//         console.log(objeto);
//     })
// })

let templateComment;
fetch('js/templates/comment.handlebars')
.then(response => response.text())
.then(template => {
    templateComment = Handlebars.compile(template); // compila y prepara el template
    getComments();
});

function getComments(){
    fetch("api/comentarios").then(resp =>{
        resp.json().then(objeto=>{
            showComments(objeto);
        })
    })
}

function showComments(objeto){
    let context = { // como el assign de smarty
        comentarios: objeto 
    }
    let html = templateComment(context);
    document.querySelector(".js-comments-container").innerHTML = html;
}

function getData(){
    // let id_review = document.querySelector('#id').value;
    let id_review = 14;
    // let user = document.querySelector('#user').value;
    let user = "admin";
    let puntaje = document.querySelector('#puntaje').value;
    let comentario = document.querySelector('#textarea').value;

    console.log(id_review);
    console.log(user);
    console.log(puntaje);
    console.log(comentario);
    let json = {
        "id_review":id_review,
        "user":user,
        "puntaje":puntaje,
        "contenido_comentario":comentario
    };
    sendData(json);
}
function sendData(data){
    fetch("api/comentarios", {
        method: 'POST',
        mode: 'cors',
        headers: {'Content-Type':'application/json'},
        body: JSON.stringify(data)
    }).then(function(r){
        if(!r.ok){
            console.log('FAIL')
        }else{
            return r.json()
        }
    })
    //getComments();
}
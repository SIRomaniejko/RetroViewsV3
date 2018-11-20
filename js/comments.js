<<<<<<< HEAD
=======
"use strict";
document.querySelector('#submit').addEventListener('click',getData);

>>>>>>> 99a9e8e38d31fd177b65da0595ec8063e1b381de
// fetch("http://localhost/proyectos/RetroViewsV3/api/test2").then(resp =>{
//     resp.json().then(objeto=>{
//         console.log(objeto);
//     })
// })

let container = document.querySelector(".js-comments-container");
let templateComment;
document.querySelector(".js-comment-loader").addEventListener("click", ()=>{
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
    }
    let html = templateComment(context);
    container.innerHTML += html;
}
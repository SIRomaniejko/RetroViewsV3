// fetch("http://localhost/proyectos/RetroViewsV3/api/test2").then(resp =>{
//     resp.json().then(objeto=>{
//         console.log(objeto);
//     })
// })
let boton = document.querySelector(".js-comment-loader");
let container = document.querySelector(".js-comments-container");
let templateCreador;
let templateComment;
boton.addEventListener("click", ()=>{
    boton.classList.add("d-none");
    fetch('js/templates/comment.handlebars').then(response =>{
        response.text().then(template =>{
            templateComment = Handlebars.compile(template); // compila y prepara el template
            getComments();
            fetchCreador();
        })
    })  
})

function fetchCreador(){
    fetch('js/templates/creador.handlebars').then(response =>{
        response.text().then(template =>{
            templateCreador = Handlebars.compile(template); // compila y prepara el template
            showCreador();
        })
    })  
}
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

function showCreador(){
    let context = {};
    let html = templateCreador(context);
    container.innerHTML = html + container.innerHTML;
}
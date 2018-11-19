fetch("http://localhost/proyectos/RetroViewsV3/api/test2").then(resp =>{
    resp.json().then(objeto=>{
        console.log(objeto);
    })
})

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
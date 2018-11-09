'use strict'

getTareas();
// template compilado
let templateTareas;

// llamado ajax para traer el template de tareas (en Smarty seria el .tpl)
fetch('js/templates/tareas.handlebars')
.then(response => response.text())
.then(template => {
    // compilo el template
    templateTareas = Handlebars.compile(template); 

    getTareas();
});


function getTareas() {
    fetch('api/tareas')
}

function renderTareas(tareas) {
    let source = document.querySelector("#task-template").innerHTML;
    let template = Handlebars.compile(source);

    // creamos el contexto (assign de smarty)
    let context = {
        tasks: tareas
    };
    let html = template(context);
    console.log(html);
    let html = templateTareas(context);
    document.querySelector("#container-tareas").innerHTML = html;
}

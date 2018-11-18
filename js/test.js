fetch("http://localhost/proyectos/RetroViewsV3/api/test2").then(resp =>{
    resp.json().then(objeto=>{
        console.log(objeto);
    })
})
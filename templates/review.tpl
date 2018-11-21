{include file="header.tpl"}
<div class="container">
	<p><a class="limpiaAnchor" href="categoria/{$categoria['nombre_categoria']}">{$categoria['nombre_categoria']}</a> > {$titulo}</p>
</div>
<div class="container center blanco rounded top ancho bottom">
  <h3>{$titulo}</h3>
  <h4>{$categoria['nombre_categoria']}<h4>
</div>
<div class="container blanco rounded">
    <div class="top bottom">
        <div class="contenido">
            <div id="carouselExampleControls" class="carousel slide contenedorCarrusel izquierda mr-3 top bottom" data-interval="5000" data-ride="carousel">
                <div class="carousel-inner">
                    {foreach from=$imagenes item=imagen key=key}
                    <div class="carousel-item {if $key == 0}active{/if}">
                        <img class="imagenCarrusel rounded contenido" src="{$imagen['direccion']}">
                    </div>
                    {/foreach}
                </div>
            </div>
            <p class="top">{$contenido}</p>
        </div>
    </div>
</div>
<div class="top bottom js-contenedorCreador hiddenRonpa container">
        <div class="contenido blanco rounded creadorComentarios">
            <div class="top left">
                    <input name="user" value="{$user}" class="d-none" id="user">
                    <input name="id_review" value="{$id_review}" class="d-none" id="id_review">
                    <div class="float-left right">
                        <button class="btn btn-success" id="submit">
                    </div>
                    <div class="float-left bottom right">
                        <div class="float-left">
                            <label class="input-group-text">Estrellas</label>
                        </div>
                        <div class="float-left">
                            <select class="custom-select float-left" id="puntaje" name="puntaje">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            </select>
                        </div>
                    </div>
                    <div id="textarea_feedback"></div>
                    <div class="float-none bottom right">
                        <input type="text" class="form-control" id="contenido_comentario" name="contenido_comentario" maxlength="150" placeholder="Escribe un comentario">
                    </div>
            </div>
        </div>
    </div> 
<div class="container contenido mt-3 blanco rounded js-comments-container bottom" idReview="{$id_review}">
    <button class="js-comment-loader btn btn-primary top bottom center ancho">Cargar comentarios</button>
    
</div>
<script src="js/contadorComentario.js"></script>
{include file="footer.tpl"}

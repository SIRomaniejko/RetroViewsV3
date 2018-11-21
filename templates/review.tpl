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
<div class="container contenido mt-3 blanco rounded js-comments-container bottom" idReview="{$id_review}">
  <button class="js-comment-loader btn btn-primary top bottom center ancho">Cargar comentarios</button>
</div>
{include file="footer.tpl"}

{include file="header.tpl"}

<div class="container center blanco rounded top ancho bottom">
  <h1>{$titulo}</h1>
  <h2>{$categoria['nombre_categoria']}<h2>
</div>
<div class="container">
  <div class="contenido blanco rounded">
    <div id="carouselExampleControls" class="carousel slide contenedorCarrusel izquierda mr-3" data-interval="5000" data-ride="carousel">
      <div class="carousel-inner">
        {foreach from=$imagenes item=imagen key=key}
          <div class="carousel-item {if $key == 0}active{/if}">
            <img class="d-block imagenCarrusel" src="{$imagen['direccion']}">
          </div>
        {/foreach}
      </div>
    </div>
    <p class="top">{$contenido}</p>
  </div>
</div>
<div class="container contenido mt-3 blanco rounded js-comments-container">

</div>
{include file="footer.tpl"}

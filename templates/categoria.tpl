{include file="header.tpl"}
<div class="container">
	<p>{$categoria['nombre_categoria']}</p>
</div>
{foreach from=$reviews item=review}
    <div class="row">
        <div class="container bg-warning top pl-0 rounded position-relative">
          <a href="review/{$review['tituloConBarra']}" class="limpiaAnchor">
            <img src="{$review['imagenes'][0]['direccion']}" class="rounded float-left img-thumbnail mr-3 chica" alt="portada">
            <h1>{$review['titulo']}</h3>
            <h2 class="text-truncate">{$review['resumen']}</h2>
            <div class="categoria"> 
                {$categoria['nombre_categoria']}
            </div>
          </a>
        </div>
    </div>
{/foreach}
{include file="footer.tpl"}

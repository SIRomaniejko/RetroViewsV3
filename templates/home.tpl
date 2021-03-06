{include file="header.tpl"}
<div class="container bottom">
  {foreach from=$reviews item=review}
    <div class="row rounded">
        <div class="container bg-warning top pl-0 rounded position-relative">
          <a href="review/{$review['tituloConBarra']}" class="limpiaAnchor">
            <img src="{$review['imagenes'][0]['direccion']}" class="rounded float-left img-thumbnail mr-3 chica" alt="portada">
            <h1>{$review['titulo']}</h3>
            <h2 class="text-truncate">{$review['resumen']}</h2>
            <div class="categoria rounded-top"> 
            {foreach from=$categorias item=categoria}
              {if $review['id_categoria'] == $categoria['id_categoria']}
                {$categoria['nombre_categoria']}
              {/if}
            {/foreach}
            </div>
          </a>
        </div>
    </div>
  {/foreach}
</div>
{include file="footer.tpl"}

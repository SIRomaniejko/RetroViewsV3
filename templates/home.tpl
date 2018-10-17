{include file="header.tpl"}
{foreach from=$reviews item=review}
    <div class="row">
        <div class="container bg-warning top pl-0 rounded">
          <a href="{$root}/review/{$review['tituloConBarra']}" class="limpiaAnchor">
            <img src="{$review['portada']}" class="rounded float-left img-thumbnail mr-3 chica" alt="portada">
            <h1>{$review['titulo']}</h3>
            <h2>{$review['resumen']}</h2>
          </a>
        </div>
    </div>
{/foreach}
{include file="footer.tpl"}

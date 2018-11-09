{include file="header.tpl"}
    {foreach from=$categorias item=categoria}
    <div class="row">
        <div class="container bg-warning col-sm- mt-1 pl-0 rounded">
            <a href="categoria/{$categoria['nombreConBarra']}" class="limpiaAnchor">
            <h1 class="text-center">{$categoria['nombre_categoria']}</h1>
            </a>
        </div>
    </div>
    {/foreach}
{include file="footer.tpl"}
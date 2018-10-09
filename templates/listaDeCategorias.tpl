{include file="header.tpl"}
    {foreach from=$categorias item=categoria}
    <div class="row">
        <a href="../reviewsCategoria/{$categoria['nombre_categoria']}"<div class="container bg-warning col-sm- mt-1 pl-0 rounded">
            <h1>{$categoria['nombre_categoria']}</h1>
        </div></a>
    </div>
    {/foreach}
{include file="footer.tpl"}
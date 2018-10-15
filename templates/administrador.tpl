{include file="header.tpl"}
    <div class="row">
        <div class="container bg-warning col-sm- mt-1 pl-0 rounded">
        <a href="{$root}/crearArticulo" class="limpiaAnchor">
            <img src="https://www.sidoarjorentcar.com/wp-content/uploads/2018/09/sketch-toolbox-sketch-toolbox-hand-drawn-cartoon-vector-illustration-of-toolbox.jpg" class="rounded float-left img-thumbnail mr-3 ultrachica" alt="portada">
            <h1>crear Articulo</h3>
        </a>
        </div>
    </div>
    <div class="row">
    <div class="col-sm sectorAdmin">
    {foreach from=$reviews item=review}
        <div class="row">
            <div class="container bg-warning col-sm- mt-1 pl-0 rounded">
            <a href="{$root}/review/{$review['tituloConBarra']}" class="limpiaAnchor">
                <img src="{$review['portada']}" class="rounded float-left img-thumbnail mr-3 ultrachica" alt="portada">
                <h1>{$review['titulo']}</h3>
                <button>
            </a>
            </div>
        </div>
    {/foreach}
    </div>
    <div class="col-sm sectorAdmin">
    {foreach from=$reviews item=review}
        <div class="row">
            <div class="container bg-warning col-sm- mt-1 pl-0 rounded">
            <a href="{$root}/review/{$review['tituloConBarra']}" class="limpiaAnchor">
                <img src="{$review['portada']}" class="rounded float-left img-thumbnail mr-3 ultrachica" alt="portada">
                <h1>{$review['titulo']}</h3>
                <button>
            </a>
            </div>
        </div>
    {/foreach}
    </div>
    </div>
{include file="footer.tpl"}
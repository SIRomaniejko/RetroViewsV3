{include file="header.tpl"}
<div class="container">
    <div class="row">
        <div class="col-sm sectorAdmin">
            <h1 class="center">Artículos</h1>
            <div class="row">
                <div class="container bg-warning col-sm- mt-1 pl-0 rounded bottom">
                <a href="crearArticulo" class="limpiaAnchor">
                    <img src="https://www.sidoarjorentcar.com/wp-content/uploads/2018/09/sketch-toolbox-sketch-toolbox-hand-drawn-cartoon-vector-illustration-of-toolbox.jpg" class="rounded float-left img-thumbnail mr-3 ultrachica" alt="portada">
                    <h1>Nuevo Artículo</h3>
                </a>
                </div>
            </div>
            {foreach from=$reviews item=review}
                <div class="row bottom">
                    <div class="container bg-warning col-sm- mt-1 pl-0 rounded position-relative ">
                        <a href="review/{$review['tituloConBarra']}" class="limpiaAnchor">
                            <img src="{$review['imagenes'][0]["direccion"]}" class="rounded float-left img-thumbnail mr-3 ultrachica" alt="portada">
                            <h1 class="text-truncate">{$review['titulo']}</h3>
                            <div class="categoria">
                                {foreach from=$categorias item=categoria}
                                    {if $review['id_categoria'] == $categoria['id_categoria']}
                                        {$categoria['nombre_categoria']}
                                    {/if}
                                {/foreach} 
                            </div>
                        </a>
                        <form action="editarArticulo/{$review['tituloConBarra']}" method="post">
                            <button class="invisiblePropio float-left" type="submit"><img class="boton" src="https://cdn3.iconfinder.com/data/icons/miniglyphs/500/097-512.png"></button>
                        </form>
                        <form action="eliminarArticulo/{$review['tituloConBarra']}" method="post">
                            <button type="submit" class="invisiblePropio left"><img class="boton" src="https://cdn2.iconfinder.com/data/icons/cleaning-19/30/30x30-10-512.png"></button>
                        </form>
                    </div>
                </div>
            {/foreach}
        </div>
        <div class="col-sm sectorAdmin">
        <h1 class="center">Categorías</h1>
        <div class="row">
            <div class="container bg-warning col-sm- mt-1 pl-0 rounded bottom">
                <img src="https://www.sidoarjorentcar.com/wp-content/uploads/2018/09/sketch-toolbox-sketch-toolbox-hand-drawn-cartoon-vector-illustration-of-toolbox.jpg" class="rounded float-left img-thumbnail mr-3 ultrachica" alt="portada">
                <h1 class="limpiaAnchor">Nueva Categoría</h3>
                <form action="crearCategoria" method="post">
                    <input type="text" name="nombreCategoria">
                    <button class="invisiblePropio float-left right" type="submit"><img class="boton" src="https://cdn0.iconfinder.com/data/icons/pixon-1/24/arrow_up_upload-512.png"></button>
                </form>
            </div>
        </div>
        {foreach from=$categorias item=categoria}
            <div class="row bottom">
                <div class="container bg-warning col-sm- mt-1 pl-0 rounded">
                  <div class="left">
                    <a href="categoria/{$categoria['nombreConBarra']}" class="limpiaAnchor">
                      <h1>{$categoria['nombre_categoria']}</h3>
                      </a>
                  </div>
                    <form action="eliminarCategoria" method="post" class="float-left left right">
                      <input hidden name="idCategoria" value="{$categoria['id_categoria']}">
                      <button type="submit" class="invisiblePropio"><img class="boton" src="https://cdn2.iconfinder.com/data/icons/cleaning-19/30/30x30-10-512.png"></button>
                    </form>
                    <form action="editarCategoria" method="post">
                        <input hidden name="idCategoria" value="{$categoria['id_categoria']}">
                        <button class="invisiblePropio float-left right" type="submit"><img class="boton" src="https://cdn3.iconfinder.com/data/icons/miniglyphs/500/097-512.png"></button>
                        <input type="text" name="nombreCategoria" class="" value="{$categoria['nombre_categoria']}">
                    </form>
                </div>
            </div>
        {/foreach}
        </div>
    </div>
</div>
{include file="footer.tpl"}

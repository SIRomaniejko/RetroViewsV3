{include file="header.tpl"}
    <div class="containerEditor blanco">
        <div class="imagenesEditorTest">
        {foreach from=$imagenes item=imagen}
        <div class="contenedorEditarImagen">
            <img src="{$imagen['direccion']}" class="imagenEditor">
            <button js-id="{$imagen['id_imagen']}"class="botonBorrarImg"><img src="https://cdn2.iconfinder.com/data/icons/cleaning-19/30/30x30-10-512.png" class="boton"</button>
        </div>
        {/foreach}
        </div>
    </div>
<form class="container" action="updateArticulo" method="post" enctype="multipart/form-data">
    <input name="id_review" value="{$review['id_review']}" hidden>
    <div class="form-group">
        <label for="imagenes">imagenes</label>
        <input type="file" name="imagenes[]" multiple>
    </div>
    <div class="form-group">
        <label for="titulo">Título</label>
        <input type="text" class="form-control" id="titulo" name="titulo"value="{$review['titulo']}" >
    </div>
    <div class="form-group">
        <label for="resumen">Resumen</label>
        <input type="text" class="form-control" id="resumen" name="resumen" value="{$review['resumen']}">
    </div>
    <div class="form-group">
        <label for="contenido">Contenido</label>
        <textarea class="form-control" id="contenido" rows="5" name="contenido">{$review['contenido']}</textarea>
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="categoria">Categoría</label>
        </div>
        <select class="custom-select" id="categoria" name="id_categoria">
            {foreach from=$categorias item=categoria}
                <option value="{$categoria['id_categoria']}" {if $review['id_categoria'] == $categoria['id_categoria']}selected{/if}> {$categoria['nombre_categoria']}</option>
            {/foreach}
        </select>
    </div>
    <button type="submit" class="btn btn-warning container bottom">Submit</button>
</form>
<script src="js/editor.js"></script>
{include file="footer.tpl"}

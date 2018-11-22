{include file="header.tpl"}
<div class="top">
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
</div>
<form class="container" action="updateArticulo" method="post" enctype="multipart/form-data">
    <input name="id_review" value="{$review['id_review']}" hidden>
    <div class="input-group mb-3 top">
        <div class="input-group-prepend">
            <span class="input-group-text">Imagenes</span>
        </div>
        <div class="custom-file">
            <input type="file" name="imagenes[]" multiple class="custom-file-input">
            <label class="custom-file-label">Elegir archivos</label>
        </div>
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text">Titulo</span>
        </div>
        <input type="text" class="form-control" id="titulo" name="titulo"value="{$review['titulo']}" >
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text">Resumen</span>
        </div>
        <input type="text" class="form-control" id="resumen" name="resumen" value="{$review['resumen']}">
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text">Contenido</span>
        </div>
        <textarea class="form-control" id="contenido" rows="2" name="contenido">{$review['contenido']}</textarea>
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

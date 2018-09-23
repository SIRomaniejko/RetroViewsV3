{include file="header.tpl"}
<form class="container" accion="editarArticulo" method="post">
    <div class="form-group">
        <label for="portada">portada</label>
        <input type="text" class="form-control" id="portada" name="portada" value="{$review['portada']}">
    </div>
    <div class="form-group">
        <label for="titulo">titulo</label>
        <input type="text" class="form-control" id="titulo" name="titulo"value="{review['titulo']}" >
    </div>
    <div class="form-group">
        <label for="resumen">resumen</label>
        <input type="text" class="form-control" id="resumen" name="resumen" value="{$review['descripccion']}">
    </div>
    <div class="form-group">
        <label for="contenido">contenido</label>
        <textarea class="form-control" id="contenido" rows="40" value="{$review['contenido']}"></textarea>
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="categoria">Categoria</label>
        </div>
        <select class="custom-select" id="categoria" name="categoria" valu>
            {foreach from=$categorias item=categoria}
                <option value="{$categoria['id_categoria']}"> {$categoria['nombre'] {if $review['id_categoria'] == $categoria['id_categoria']}selected{/if}</option>
            {/foreach}
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
{include file="footer.tpl"}
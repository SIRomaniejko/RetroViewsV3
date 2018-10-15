{include file="header.tpl"}
<form class="container" action="{$root}/updateArticulo" method="post">
    <input name="id_review" value="{$review['id_review']}" hidden>
    <div class="form-group">
        <label for="portada">portada</label>
        <input type="text" class="form-control" id="portada" name="portada" value="{$review['portada']}">
    </div>
    <div class="form-group">
        <label for="titulo">titulo</label>
        <input type="text" class="form-control" id="titulo" name="titulo"value="{$review['titulo']}" >
    </div>
    <div class="form-group">
        <label for="resumen">resumen</label>
        <input type="text" class="form-control" id="resumen" name="resumen" value="{$review['resumen']}">
    </div>
    <div class="form-group">
        <label for="contenido">contenido</label>
        <textarea class="form-control" id="contenido" rows="40" name="contenido">{$review['contenido']}</textarea>
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="categoria">Categoria</label>
        </div>
        <select class="custom-select" id="categoria" name="id_categoria">
            {foreach from=$categorias item=categoria}
                <option value="{$categoria['id_categoria']}" {if $review['id_categoria'] == $categoria['id_categoria']}selected{/if}> {$categoria['nombre_categoria']}</option>
            {/foreach}
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
{include file="footer.tpl"}
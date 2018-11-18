{include file="header.tpl"}
<form class="container" action="subirArticulo" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="imagenes">imagenes</label>
        <input type="file" name="imagenes[]" multiple>
    </div>
    <div class="form-group">
        <label for="titulo">Título</label>
        <input type="text" class="form-control" id="titulo" name="titulo" >
    </div>
    <div class="form-group">
        <label for="resumen">Resumen</label>
        <input type="text" class="form-control" id="resumen" name="resumen">
    </div>
    <div class="form-group">
        <label for="contenido">Contenido</label>
        <textarea class="form-control" id="contenido" name="contenido" rows="5"></textarea>
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="categoria">Categoría</label>
        </div>
        <select class="custom-select" id="categoria" name="id_categoria">
            {foreach from=$categorias item=categoria}
                <option value="{$categoria['id_categoria']}"> {$categoria['nombre_categoria']}</option>
            {/foreach}
        </select>
    </div>
    <div>
      <button type="submit" class="btn btn-warning container bottom">Submit</button>
    </div>
</form>
{include file="footer.tpl"}

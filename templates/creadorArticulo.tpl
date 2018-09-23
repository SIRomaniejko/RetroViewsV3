{include file="header.tpl"}
<form class="container" accion="crearArticulo">
  <div class="form-group">
    <label for="portada">portada</label>
    <input type="text" class="form-control" id="portada" name="portada" >
  </div>
  <div class="form-group">
    <label for="titulo">titulo</label>
    <input type="text" class="form-control" id="titulo" name="titulo" >
  </div>
  <div class="form-group">
    <label for="resumen">resumen</label>
    <input type="text" class="form-control" id="resumen" name="resumen">
  </div>
  <div class="form-group">
    <label for="contenido">Example textarea</label>
    <textarea class="form-control" id="contenido" rows="40"></textarea>
  </div>
</form>
{include file="footer.tpl"}
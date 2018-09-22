<form id="formBuscador">
  <input type="text" name="busqueda" id="inputBuscar" placeholder="buscar">
  <input type="button" name="submit" id="btnBuscar" value="Buscar">
</form>
<div>
  <ul id="listaLibros">
    <!-- Tiene que llegar arreglo -->
      {foreach from=$resultados} item=key}
        <li>{$key['nombre']}</li>
      {/foreach}
  </ul>
</div>

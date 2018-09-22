<form>
  <select id="comboAutor" name="autor">
    <option value="0">Seleccionar Autor</option>
    <!-- tiene que llegar un arreglo -->
      {foreach from=$Categorias item=key}
        <option value="{$key['idCategoria']}">{$key['nombre']}</option>
      {/foreach}
  </select>
  <select id="comboLibro">

  </select>
</form>

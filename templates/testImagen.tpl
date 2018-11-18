{include file="header.tpl"}
<form class="container" action="postImagenTest" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="portada">Portada</label>
        <input type="file" name="imagenes[]" multiple>
    </div>
    
    <div>
      <button type="submit" class="btn btn-warning container bottom">Submit</button>
    </div>
</form>
{include file="footer.tpl"}

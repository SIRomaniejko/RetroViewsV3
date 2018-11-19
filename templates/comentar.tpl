{include file="header.tpl"}
<div class="container top">
	<div class="contenido blanco rounded">
		<div class="top left">
			<div class="float-left right">
				<button type="button" class="btn btn-success" id="submit">Submit</button>
			</div>
			<div class="float-left bottom right">
				<select class="custom-select" id="puntaje">
				<option value="0">Estrellas</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				</select>
			</div>
			<div id="textarea_feedback"></div>
			<div class="float-none bottom right">
				<input type="text" class="form-control" id="textarea" maxlength="150" placeholder="Escribe un comentario">
			</div>
		</div>
	</div>
</div>
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script src="js/contadorComentario.js"></script>
{include file="footer.tpl"}
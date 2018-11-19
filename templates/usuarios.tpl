{include file="header.tpl"}
<div class="container">
  <div class="contenido blanco rounded top">
			<table class="table table-striped table-sm">
				<thead class="thead-dark">
					<tr>
						<th scope="col">Nombre</th>
						<th scope="col" colspan="2">Nivel</th>
					</tr>
				</thead>
				<tbody>
				{foreach from=$usuarios item=user}
					<tr>
						<td>{$user['user']}</td>
						<td>{$user['nivel']}</td>
						<td>
							<form action="eliminarUsuario" method="POST">
								<input hidden name="user" value="{$user['user']}">
								<button class="invisiblePropio float-left right" type="submit"><img class="boton" src="https://cdn2.iconfinder.com/data/icons/cleaning-19/30/30x30-10-512.png"></button>
							</form>
							<form action="editarUsuario" method="post">
									<button class="invisiblePropio float-left right" type="submit"><img class="boton" src="https://cdn0.iconfinder.com/data/icons/pixon-1/24/arrow_up_upload-512.png"></button>
									<input type="number" name="nivel" value="{$user['nivel']}" placeholder="Cambiar nivel">
									<input hidden name="user" value="{$user['user']}">
							</form>
						</td>
					</tr>
				{/foreach}
				</tbody>
			</table>
	</div>
</div>
{include file="footer.tpl"}
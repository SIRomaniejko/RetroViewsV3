$(document).ready(function() {
	var text_max = 150;
	$('#textarea_feedback').html(text_max + ' caracteres restantes');

	$('#contenido_comentario').keyup(function() {
			var text_length = $('#contenido_comentario').val().length;
			var text_remaining = text_max - text_length;

			$('#textarea_feedback').html(text_remaining + ' caracteres restantes');
	});
});
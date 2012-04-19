$(document).ready(function() {
	$('input[type=submit]').click(function(event) {
		event.preventDefault();
		$("#results").html("");
		
		var input = $('input[type=text]').val();
		
		$.ajax({
			url: 'getLyrics.php',
			type: 'POST',
			data: {'term':input},
			success: function(result) {
				
			}
		});
	});
});
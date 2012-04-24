$(document).ready(function() {
	$('input[type=submit]').click(function(event) {
		event.preventDefault();
		$("#selected").html("");
		
		var input = $('input[type=text]').val();
		
		$.ajax({
			url: 'searchLyricText.php',
			type: 'POST',
			data: {'term':input},
			success: function(result) {
				$("#lyrics ul").html(result);
				
				$("h1").click(function(){
										
					var id = $(this).attr('alt');
					$.ajax({
						url: 'getLyric.php',
						type: 'POST',
						data: {'id':id},
						success: function(lyrics){
							$("#selected").html(lyrics);
						},
					});
				});
			}
		});
	});
});
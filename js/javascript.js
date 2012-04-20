$(document).ready(function() {
	$('input[type=submit]').click(function(event) {
		event.preventDefault();
		$("#results").html("");
		
		var input = $('input[type=text]').val();
		
		$.ajax({
			url: 'searchLyricText.php',
			type: 'POST',
			data: {'term':input},
			success: function(result) {
				$("#lyrics ul").html(result);
				
				$('.lyrics').click(function(){
					var id = $(this).attr('alt');
					$.ajax({
						url: 'getLyric.php',
						type: 'POST',
						data: {'id':id},
						success: function(lyric){
							$("#selected").html(lyric);
						},
					});
				});
			}
		});
	});
});
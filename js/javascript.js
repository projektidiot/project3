$(document).ready(function() {
	$('input[type=submit]').click(function(event) {
		event.preventDefault();
		$("#results").html("");
		
		var input = $('input[type=text]').val();
		
		$.ajax({
		});
	});
});
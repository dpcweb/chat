// Send AJAX Request To ajax.php To retrive DATA
setInterval(function() {
	$.post("ajax.php", {parse: 'data'}, function(data) {
	$(".chat").empty();
		$.each(data,  function(index, element) {
			$(".chat").append('<li>'+element.message+' ['+element.user+'] </li>');
		});
	});
}, 3000);


$("#submit").click(function() {
	var msg = $("#message").val();
	$.post("ajax.php", {message: msg, user_name: 'paul'});
});
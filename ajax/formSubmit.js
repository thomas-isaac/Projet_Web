$(document).ready(function(){
	$('form').submit(function(event){
		var formData = {
		'name'	: $('input[name=name]').val(),
		'email'	: $('input[email=email]').val(),
		'pseudo': $('input[pseudo=pseudo]').val()
		};
	
	$.ajax({
		type	: 'POST',
		url	: 'formProcess.php',
		data	: 'formData,
		dataType: 'json',
		encode	: true
	})
	
	.done(function(data){
		console.log(data);
	});
	
	event.preventDefault();
	});
});

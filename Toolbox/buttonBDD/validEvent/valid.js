function valid(eventId){
	var url = 'http://localhost:8081/event/'+eventId+'/valid';
	console.log(url);

	$.ajax({
		type		: 'PUT',
		url		: url,
		data		: eventId,
		dataType	: 'json',
		encode		: true
	});
};

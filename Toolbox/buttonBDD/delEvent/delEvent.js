function delProduct(eventId){
	var url = 'http://localhost:8081/events/';
	url += eventId;

	$.ajax({
		type		: 'DELETE',
		url		: url,
		data		: {ID_EVENT: eventId},
		dataType	: 'json',
		encode		: true
	});
};

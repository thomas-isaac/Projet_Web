function vote(userId, eventId){
	var url = 'http://localhost:8081/vote';

	$.ajax({
		type		: 'POST',
		url		: url,
		data		: {userId, eventId},
		dataType	: 'json',
		encode		: true
	});
};

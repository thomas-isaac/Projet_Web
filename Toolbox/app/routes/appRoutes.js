module.exports = function(app){
	var accessHandler = require('../controller/appController');

	app.route('/')
	.get(accessHandler.getRoot);

	app.route('/events')
	.get(accessHandler.listEvents)
	.post(accessHandler.addEvents);

	app.route('/events/event_id')
	.get(accessHandler.readEvent)
	.put(accessHandler.modEvent)
	.delete(accessHandler.delEvent);
};

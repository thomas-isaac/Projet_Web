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

	app.route('/products')
	.get(accessHandler.listProducts)
	.post(accessHandler.addProducts);

	app.route('/products/product_id')
	.get(accessHandler.readProduct)
	.put(accessHandler.modProduct)
	.delete(accessHandler.delProduct);

	app.route('/users')
	.get(accessHandler.listUsers)
	.post(accessHandler.addUsers);

	app.route('/users/:user_id')
	.get(accessHandler.readUser)
	.put(accessHandler.modUser)
	.delete(accessHandler.delUser);
};

var express = require('express');
var bodyParser = require("body-parser");
var hostname = 'localhost';
var port = 8081;
var app = express();
var myRouter = express.Router();

var event = {
	nom: "",
	description: "",
	date: "",
	image: ""
};

app.use(bodyParser.urlencoded({ extended : false }));
app.use(bodyParser.json());

myRouter.route('/events')

.post(function(req,res){
	event.nom = req.body.nom;
	event.description = req.body.description;
	event.date = req.body.date;
	event.image = req.body.image;

	res.json(event);
});

app.use(myRouter);
app.listen(port, hostname, function(){
	console.log("Server running on: " + hostname + ":" + port + "\n");
});


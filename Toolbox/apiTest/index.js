var express = require('express');
var bodyParser = require("body-parser");
var mysql = require('mysql');

var hostname = 'localhost';
var port = 8081;
var app = express();
var myRouter = express.Router();

app.use(bodyParser.urlencoded({ extended : false }));
app.use(bodyParser.json());	

var con = mysql.createConnection({
	host: "localhost",
	user: "root",
	password: "root",
	database: "PROJET"
});

var event = {
	nom: "",
	description: "",
	date: "",
	image: ""
};

con.connect(function(err) {
	if (err) throw err;
	console.log("Connected to database");
});

	myRouter.route('/')

.all(function(req,res){
	res.json({message : "Welcome", methode : req.method})
});

	myRouter.route('/vote')

.post(function(req,res){
	var vote = "INSERT INTO voter (ID_USER, ID_EVENT, VOTE_EVENT) VALUES ?";
	con.query(vote, [req.body.eventId, req.body.userId, 1], function(err, result){
		if(err) throw err;
		res.json({result});
	});
});

	myRouter.route('/produits')

.get(function(req,res){
	var sql = "SELECT * FROM PRODUIT";
	con.query(sql, function (err, result, fields) {
		if (err) throw err;
		res.json({result});
	});
})

.post(function(req,res){
	console.log("POST request on /produits");
	console.log(req.body);
	var post = "INSERT INTO PRODUITS (NOM_PRODUIT) VALUES ?";
	con.query(post, [value], function (err, result){
		if (err) throw err;
		res.json({result});
	});
});


	myRouter.route('/events')

.get(function(req,res){
	var getEvent = "SELECT * FROM EVENT";
	con.query(getEvent, function (err, result, fields) {
		if (err) throw err;
		res.json({result});
	});
})
.post(function(req,res){
	event.nom = req.body.nom;
	event.description = req.body.description;
	event.date = req.body.date;
	event.image = req.body.image;
	
	var value = Object.keys(event).map(function(key){
		return event[key];
	});
	var post = "INSERT INTO EVENT (NOM_EVENT, DESCRIPTION_EVENT) VALUES ?";
	con.query(post, [value], function (err, result) {
		if (err) throw err;
		console.log("rows inserted" + result.affectedRows );
	});
})
.put(function(req,res){
	res.json({message : "Modify events", methode : req.method});
});


	myRouter.route('/events/:event_id')

.get(function(req,res){
	res.json({message : "Get infos for event " + req.params.event_id});
})
.put(function(req,res){
	res.json({message : "Modify infos for event " + req.params.event_id});
})
.delete(function(req,res){
	var eventId = req.body.eventId;
	var del = "DELETE FROM event WHERE EVENT_ID = ?";	
	con.query(del, eventId, function(err, result){
		if(err) throw err;
		res.json({message : "Delete event " + req.params.event_id});
	});
});


app.use(myRouter);
app.listen(port, hostname, function(){
	console.log("Server listening on http://"+ hostname +":"+port+"\n");
});

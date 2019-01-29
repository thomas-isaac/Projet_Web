var con = require('./db.js');

var Event = function(event){
	this.id = event.ID_EVENT;
	this.name = event.NOM_EVENT;
	this.desc = event.DESCRIPTION_EVENT;
	this.cat = event.CATEGORY_EVENT;
	this.date = event.DATE_EVENT;
	this.valid = event.VALIDATION;
	this.month = event.MOIS_EVENT;
	this.price = event.PRIX_EVENT;
	this.public = event.PUBLIC_EVENT;
);

function answer(err, res){
		if(err){
			res.json({"Error: " + err});
			result(null, err);
		}
		else{
			res.json({result});
			result(null, res);
		}
}

var Event.listEvents = function(result){
	sql.query("SELECT * FROM event", function(err, res){
		answer(err, res);
	});
};

var Event.addEvent = function(row, result){
	sql.query("INSERT INTO event VALUES ?", row, function(err, res){
		answer(err, res);
	});
};

var Event.readEvent = function(id, result){
	sql.query("SELECT * FROM event WHERE ?", id, function(err, res){
		answer(err, res);
	});
};

var Event.modEvent = function(id, row, result){
	sql.query("UPDATE event SET ? WHERE ?", [row, id], function(err, res){
		answer(err, res);
	});
};

var Event.delEvent = function(id, result){
	sql.query("DELETE FROM event WHERE ?", id, function(err, res){
		answer(err, res);
	});
};

module.exports = Event;

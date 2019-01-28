var mysql = require('mysql');

var con = mysql.createConnection({
	host: "localhost",
	user: "root",
	password: "root",
	database: "mydb"
});

con.connect(function(err) {
	if (err) throw err;
	console.log("Connected to database");
	
	var sql = "INSERT INTO EVENT (NOM_EVENT) VALUES ?";
	var values = [['unEvent']];
	con.query(sql, [values], function (err, result) {
		if (err) throw err;
		console.log(result);
	});
});

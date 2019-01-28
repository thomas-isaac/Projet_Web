var post = "INSERT INTO events (NOM_EVENT, DESCRIPTION_EVENT, DATE_EVENT, IMAGE) VALUES ?";
var values = [
	['alacool', 'un event alacool', '2019-07-09', 'uneimagecool.jpg']
	['lolol', 'un event lol', '2019-08-03', 'uneimagelol.png']
];
con.query(post, [values], function (err, result) {
	if (err) throw err;
	res.json({message : result.affectedRows "rows inserted"});
});
curl -i -X POST -H 'Content-Type: application/json' -d '{"nom": "event", "description": "desc", "date" : "2019-09-09", "image" : "untruc.jpg"}' http:/
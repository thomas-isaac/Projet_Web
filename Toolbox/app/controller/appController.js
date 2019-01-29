var Event = require('../model/appModel.js');

exports.getRoot = function(req, res){

};

exports.listEvents = function(req, res){
	Event.listEvents(function(err, event){});
};

exports.addEvents = function(req, res){};
exports.readEvent = function(req, res){};
exports.modEvent = function(req, res){};
exports.delEvent = function(req, res){};

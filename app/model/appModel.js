var sql = require('./db.js');

var Event = function(event){
	this.name = event.NOM_EVENT;
	this.desc = event.DESCRIPTION_EVENT;
	this.cat = event.CATEGORY_EVENT;
	this.date = event.DATE_EVENT;
	this.valid = event.VALIDATION;
	this.month = event.MOIS_EVENT;
	this.price = event.PRIX_EVENT;
	this.public = event.PUBLIC_EVENT;
);

var Produit = function(produit){
	this.name = produit.NOM_PRODUIT;
	this.desc = produit.DESCRIPTION_PRODUIT;
	this.price = produit.PRIX_PRODUIT;
	this.cat = produit.CATEGORY_PRODUIT;
	this.compt = produit.COMPTEUR_PRODUIT;
	this.img = produit.IMAGE_PRODUIT;
};

var User = function(user){
	this.name = user.NOM_USER;
	this.fname = user.PRENOM_USER;
	this.passwd = user.PASSWORD;
	this.mail = user.MAIL;
	this.bdeM = user.BDE_MEMBRE;
	this.cesiM = user.CESI_MEMBRE;
	this.city = user.VILLE;
}

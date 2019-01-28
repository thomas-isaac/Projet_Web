function validateForm() {
	var name = document.forms["formInscription"]["prenom"].value;
	var surname = document.forms["formInscription"]["nom"].value;
	var mail = document.forms["formInscription"]["mail"].value;
	var pwd = document.forms["formInscription"]["motDePasse"].value;
	var cpwd = document.forms["formInscription"]["CmotDePasse"].value;

	if (name = "") {
		alert("Le champ prenom doit etre complété");
		return false;
	}
	else if (surname = "") {
		alert("Le champ nom doit etre complété");
		return false;
	}
	else if (mail = "") {
		alert("Le champ mail doit etre complété");
		return false;
	}
	else if (pwd = "") {
		alert("Le champ mot de passe doit etre complété");
		return false;
	} 
	else if (cpwd = "") {
		alert("Le champ confirmation de mot de passe doit etre complété");
		return false;
	}

	if (pwd != cpwd) {
		alert("Les mots de passe ne correspondent pas");
	}

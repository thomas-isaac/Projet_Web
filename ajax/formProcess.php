<?php

$errors = array();
$data = array();

if(empty($_POST['name'])) $errors['name'] = 'Le champ nom doit être complété.';
if(empty($_POST['email'])) $errors['email'] = 'Le champ email doit être complété.';
if(empty($_POST['pseudo'])) $errors['pseudo'] = 'Le champ pseudo doit être complété.';

if (!empty($errors)){
	$data['success'] = false;
	$data['errors'] = $errors;
}
else {
	// Requete sql ic

	$data['success'] = true;
	$data['message'] = 'Formulaire enregistré';
}

echo json_encode($data);

?>

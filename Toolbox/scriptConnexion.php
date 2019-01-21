<?php

$bdd = new PDO('mysql:host=localhost;dbname=projet_web;charset=utf8', 'root', '');

$mail = $_POST['mail'];
$motDePasse = $_POST['motDePasse'];


// Selects all nicknames identical to the one received by the script
$response = $bdd->prepare('SELECT * FROM user WHERE user.MAIL=:mail and user.PASSWORD=:motDePasse');
$response->bindValue(':mail', $mail, PDO::PARAM_STR);
$response->bindValue(':motDePasse', $motDePasse, PDO::PARAM_STR);
$response->execute();
$result = $response->fetch(PDO::FETCH_OBJ);


if($result != false) {
    
    echo "Valide";
}
if ($result->BDE_MEMBRE == '1') {
    echo("BDE");
}
if ($result->CESI_MEMBRE == '1') {
    echo("CESI");
} else {
    
    echo("erreur");
    $response->closeCursor();

}

// frees up the connection

?>
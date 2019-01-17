<?php
$bdd = new PDO('mysql:host=localhost;dbname=projet_web;charset=utf8', 'root', '');

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$mail = $_POST['mail'];
$ville = $_POST['ville'];
$motDePasse = $_POST['motDePasse'];

/*$response = $bdd->prepare('SELECT pseudo FROM user WHERE pseudo=:pseudo');
$response->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
$response->execute();

$result = $response->fetch();

if($result) {
    echo("error");

} else {
    
    echo "Valide";*/

    $requete = $bdd->prepare("INSERT INTO user (NOM_USER, PRENOM_USER, PASSWORD, MAIL, VILLE) VALUES( :nom, :prenom, :motdePasse, :mail, :ville)");
    $requete->bindValue(':nom', $nom, PDO::PARAM_STR);
    $requete->bindValue(':prenom', $prenom, PDO::PARAM_STR);
    $requete->bindValue(':motdePasse', $motDePasse, PDO::PARAM_STR);
    $requete->bindValue(':mail', $mail, PDO::PARAM_STR);
    $requete->bindValue(':ville', $ville, PDO::PARAM_STR);
    $requete->execute();
//}

//$response->closeCursor();
?>
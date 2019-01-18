<?php
$bdd = new PDO('mysql:host=localhost;dbname=projet_web;charset=utf8', 'root', '');

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$mail = $_POST['mail'];
$ville = $_POST['ville'];
$motDePasse = $_POST['motDePasse'];
$CmotDePasse = $_POST['CmotDePasse'];


$response = $bdd->prepare('SELECT MAIL FROM user WHERE MAIL=:MAIL');
$response->bindValue(':MAIL', $mail, PDO::PARAM_STR);
$response->execute();

$result = $response->fetch();

if($result != false ) {
    echo("error");

} elseif ($motDePasse == $CmotDePasse){
    
    echo "Valide";

    $requete = $bdd->prepare("INSERT INTO user (NOM_USER, PRENOM_USER, PASSWORD, MAIL, VILLE) VALUES( :nom, :prenom, :motdePasse, :mail, :ville)");
    $requete->bindValue(':nom', $nom, PDO::PARAM_STR);
    $requete->bindValue(':prenom', $prenom, PDO::PARAM_STR);
    $requete->bindValue(':motdePasse', $motDePasse, PDO::PARAM_STR);
    $requete->bindValue(':mail', $mail, PDO::PARAM_STR);
    $requete->bindValue(':ville', $ville, PDO::PARAM_STR);
    $requete->execute();
} else {
    echo "pas valide"; 
}

?>
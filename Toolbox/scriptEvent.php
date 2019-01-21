<?php
$bdd = new PDO('mysql:host=localhost;dbname=projet_web;charset=utf8', 'root', '');

$nom = $_POST['nom'];
$description = $_POST['description'];
$CATEGORY = $_POST['CATEGORY'];

    
    echo "Valide";

    $requete = $bdd->prepare("INSERT INTO event (NOM_EVENT, DESCRIPTION_EVENT, CATEGORY_EVENT, ID_USER) VALUES( :nom, :description, :CATEGORY, :user)");
    $requete->bindValue(':nom', $nom, PDO::PARAM_STR);
    $requete->bindValue(':description', $description, PDO::PARAM_STR);
    $requete->bindValue(':CATEGORY', $CATEGORY, PDO::PARAM_STR);
    $requete->bindValue(':user', "1", PDO::PARAM_STR);
    $requete->execute();

?>
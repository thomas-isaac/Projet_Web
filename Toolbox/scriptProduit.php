<?php
$bdd = new PDO('mysql:host=localhost;dbname=projet_web;charset=utf8', 'root', '');

$nom = $_POST['nom'];
$description = $_POST['description'];
$prix = $_POST['prix'];
$CATEGORY = $_POST['CATEGORY'];
$Image = $_POST['Image'];


/*$response = $bdd->prepare('SELECT MAIL FROM user WHERE MAIL=:MAIL');
$response->bindValue(':MAIL', $mail, PDO::PARAM_STR);
$response->execute();

$result = $response->fetch();

if($result != false ) {
    echo("error");

} elseif ($motDePasse == $CmotDePasse){*/
    
    echo "Valide";

    $requete = $bdd->prepare("INSERT INTO produit (NOM_PRODUIT, DESCRIPTION_PRODUIT, PRIX_PRODUIT,CATEGORY_PRODUIT, IMAGE_PRODUIT) VALUES( :nom, :description, :prix, :CATEGORY, :Image)");
    $requete->bindValue(':nom', $nom, PDO::PARAM_STR);
    $requete->bindValue(':description', $description, PDO::PARAM_STR);
    $requete->bindValue(':prix', $prix, PDO::PARAM_STR);
    $requete->bindValue(':CATEGORY', $CATEGORY, PDO::PARAM_STR);
    $requete->bindValue(':Image', $Image, PDO::PARAM_STR);
    $requete->execute();
//} else {
  //  echo "pas valide"; 
//}

?>
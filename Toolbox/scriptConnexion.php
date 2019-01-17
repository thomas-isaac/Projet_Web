<?php

$bdd = new PDO('mysql:host=localhost;dbname=projet_web;charset=utf8', 'root', '');

$mail = $_POST['mail'];
$motDePasse = $_POST['motDePasse'];

// Selects all nicknames identical to the one received by the script
$response = $bdd->prepare('SELECT NOM_USER FROM user WHERE user.MAIL=:mail and user.PASSWORD=:motDePasse');
$response->bindValue(':mail', $mail, PDO::PARAM_STR);
$response->bindValue(':motDePasse', $motDePasse, PDO::PARAM_STR);
$response->execute();
$resultpseudo = $response->fetch(PDO::FETCH_OBJ);

// Selects all nicknames identical to the one received by the script
$responseA = $bdd->prepare('SELECT BDE_MEMBRE FROM user WHERE user.MAIL=:mail and user.PASSWORD=:motDePasse');
$responseA->bindValue(':mail', $mail, PDO::PARAM_STR);
$responseA->bindValue(':motDePasse', $motDePasse, PDO::PARAM_STR);
$responseA->execute();
$resultadmin = $responseA->fetch(PDO::FETCH_OBJ);
echo json_encode($resultadmin);
if($resultpseudo != false) {
    
    echo "Valide";
// else result == null
}
if ($resultadmin->BDE_MEMBRE == '1') {
    echo("test");
    $response->closeCursor();
    //header('Location:admin.php');
} else {
    
    echo("erreur");
    $response->closeCursor();

}

// frees up the connection

?>
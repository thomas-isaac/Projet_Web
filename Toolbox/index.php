<?php
try

{


    $bdd = new PDO('mysql:host=localhost;dbname=projet_web;charset=utf8', 'root', '');

}

catch(Exception $e)

{


        die('Erreur : '.$e->getMessage());

}

$response = $bdd->query('SELECT * FROM user');


while ($donnees = $response->fetch())

{


   ?>

    <p>

    <strong>Nom :</strong>  <?php echo $donnees['NOM_USER']; ?><br />
    <strong>Prenom :</strong>  <?php echo $donnees['PRENON_USER']; ?><br />
    <strong>Password :</strong>  <?php echo $donnees['Password']; ?><br />
    <strong>Mail :</strong>  <?php echo $donnees['Mail']; ?><br />
    <strong>Ville :</strong>  <?php echo $donnees['Ville']; ?><br />


   </p>

<?php

}


//$reponse->closeCursor(); // Termine le traitement de la requête



?>

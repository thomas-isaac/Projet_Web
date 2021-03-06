<!doctype html>

<html lang="fr">

    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">        
        <link rel="stylesheet"href="/style/vendors/fontawesome/css/all.min.css"/>
        <link href= "style.css" rel="stylesheet"  type="text/css"/>
        <link rel="icon" type="image/png" href="pictures/Logo_BDE.png"/>      
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php    $bdd = new PDO('mysql:host=localhost;dbname=projet_web;charset=utf8', 'root', ''); ?>
        <title>Boîte à idées</title>
    </head>

<body>
        <?php include("header.php"); ?>

        <main>

          <h3>Vous voulez proposer une idée ? c'est <a href="boiteform.php">par ici !</a></h3>

          <div id="wrap">
                  <?php
                try
                {
                    $bdd = new PDO('mysql:host=localhost;dbname=projet_web;charset=utf8', 'root', '');
                }
                catch(Exception $e)
                {
                        die('Erreur : '.$e->getMessage());
                }
                $reponse = $bdd->query('
                SELECT * FROM `event` 
                INNER JOIN avoir ON event.ID_EVENT = avoir.ID_EVENT
                INNER JOIN image ON avoir.ID_IMAGE = image.ID_IMAGE 
                WHERE event.VALIDATION = 0 AND event.MOIS_EVENT =0 ');

                while ($donnees = $reponse->fetch())
                {
                ?>
                    <div id="event">
                    <p id="kiloDisplay">

                    <a id="btn2"><h4><strong>Nom :</strong> <?php echo $donnees['NOM_EVENT']; ?><br></h4></a>

                    <p><strong>Image :</strong></p> <?php       
            echo '<img id="imageproduit" src="public/image/'.$donnees['LIEN_IMAGE'].'"/>';
                           ?>  <br>


                </p></div>

                <?php
                  }
                 $reponse->closeCursor(); 
                ?>
</div>
        </main>

     </body>

    <?php include("footer.php"); ?>

</html>

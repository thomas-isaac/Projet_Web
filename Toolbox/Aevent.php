<!doctype html>

<html lang="fr">

    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">        <link rel="stylesheet"href="/style/vendors/fontawesome/css/all.min.css"/>
        <link href= "style.css" rel="stylesheet"  type="text/css"/>
        <link rel="icon" type="image/png" href="pictures/Logo_BDE.png"/>      
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php    $bdd = new PDO('mysql:host=localhost;dbname=projet_web;charset=utf8', 'root', ''); ?>
        <title>Les PANGU du CESI</title>
    </head>

<body>
        <header>
         <div id="conteneur">
          <img src="pictures/Logo_CESI.png" id="Logo_CESI" class="element">
          <img src="pictures/Logo_BDE.png" id="Logo_BDE" class="element">
          <a id="btn1" href="connexion.php">Connexion</a>
        </div>

        <div id="conteneur1">
          <a id="btn" href="accueil.blade.php">Accueil</a>
          <a id="btn" href="boutique.php">Boutique</a>
          <a id="btn" href="event.php">Events</a>
          <a id="btn" href="boite.php">Boite à idées</a>
        </div>
        </header>

        <main>

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
                INNER JOIN image ON avoir.ID_IMAGE = image.ID_IMAGE ');

                while ($donnees = $reponse->fetch())

                {

                ?>

                    <p id="kiloDisplay">

                    <strong>Nom :</strong> <?php echo $donnees['NOM_EVENT']; ?><br />

                    Image : <?php       
            echo '<img src="public/image/'.$donnees['LIEN_IMAGE'].'"/>';
                           ?>  <br /> 


                </p>

                <?php

                  }

                 $reponse->closeCursor(); 

                ?>

        </main>

     </body>

     <footer>
         <h5>coucou</h5>
     </footer>

</html>

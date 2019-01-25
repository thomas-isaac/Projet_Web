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
    
         <?php include("header.php"); ?>
<body>


        <main>
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
                SELECT * FROM `produit` ORDER BY `ID_PRODUIT` ASC ');

                while ($donnees = $reponse->fetch())

                {

                ?>
                    <div id="produit">
                    <p id="kiloDisplay">

                    <a id="btn2" href=""> <strong>Nom :</strong> <?php echo $donnees['NOM_PRODUIT']; ?><br></a>

                        <p><strong> Image : </strong></p><?php       
            echo '<img id="imageproduit" src="public/image/'.$donnees['IMAGE_PRODUIT'].'"/>';
                           ?>  <br> 
                    <div id="infoproduit">    
                        <strong>Cout : </strong><?php echo $donnees['PRIX_PRODUIT']; ?> € <br> 
                        <strong>Catégory : </strong><?php echo $donnees['CATEGORY_PRODUIT']; ?>  <br> 
                        <strong>Description : </strong><?php echo $donnees['DESCRIPTION_PRODUIT']; ?>  <br> 


                        </div>
                        </p></div>

                <?php

                  }

                 $reponse->closeCursor(); 

                ?>
            </div>
        </main>

     </body>

    <?php include("footer.php");

</html>

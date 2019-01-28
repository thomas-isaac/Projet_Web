<!doctype html>

<html lang="fr">

    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">        <link rel="stylesheet"href="/style/vendors/fontawesome/css/all.min.css"/>
        <link href= "style.css" rel="stylesheet"  type="text/css"/>
        <link rel="icon" type="image/png" href="pictures/Logo_BDE.png"/>      
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Les PANGU du CESI</title>
    </head>
    
         <?php include("header.php"); ?>
<body>


        <main>
                <?php
                    $bdd = new PDO('mysql:host=localhost;dbname=projet_web;charset=utf8', 'root', '');

                $req = $bdd->query('
                SELECT IMAGE_PRODUIT FROM produit 
                ORDER BY COMPTEUR_PRODUIT DESC
                LIMIT 3 '); 
                
                $var = 0;
                $caroussel = null;
                while ($data = $req ->fetch())
                {
                    $caroussel[$var] = $data;
                    $var+= 1;
                }
                    
                ?>

            <div id="slider" class="carousel slide" data-ride="carousel">
  				<ol class="carousel-indicators">
    				<li data-target="#slider" data-slide-to="0" class="active"></li>
    				<li data-target="#slider" data-slide-to="1"></li>
    				<li data-target="#slider" data-slide-to="2"></li>
  				</ol>
  				<div class="carousel-inner">
    			<div class="carousel-item active">
                <img class="d-block w-100" src="pictures/<?php echo $caroussel[0]['IMAGE_PRODUIT'] ?>" alt="First slide">
                      <div class="carousel-caption d-none d-md-block">
                        <h3>Gala du BDE 2018</h3>
                      </div>
    			</div>
   				<div class="carousel-item">
                      <img class="d-block w-100" src="pictures/<?php echo $caroussel[1]['IMAGE_PRODUIT'] ?>" alt="Second slide">
                      <div class="carousel-caption d-none d-md-block">
                        <h3>Acheter les bonnets du BDE ! Ils sont beaux, ils sont frais !</h3>
                        </div>
    			</div>
    			<div class="carousel-item">
                      <img class="d-block w-100" src="pictures/<?php echo $caroussel[2]['IMAGE_PRODUIT'] ?>" alt="Third slide">
                      <div class="carousel-caption d-none d-md-block">
                        <h3>Vous avez une idée d'événement et vous voulez la partager ? Allez dans la boite à idées !</h3>
                      </div>
    			</div>
  				<a class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
    				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    				<span class="sr-only">Previous</span>
  				</a>
  				<a class="carousel-control-next" href="#slider" role="button" data-slide="next">
    				<span class="carousel-control-next-icon" aria-hidden="true"></span>
   					<span class="sr-only">Next</span>
  				</a>
			  </div>
              </div>
          <div id="wrap">
        <?php

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
			<?php
                    	if($_SESSION['log'] == 1){ ?>
                    		<a id="btnadd" href=""> Ajouter au panier</a>
                    		<?php } ?>
			<?php
			if($_SESSION['logBDE'] == 1){ ?>                    	
                    		<a id="btnsuppr" href=""> Supprimer</a>
                    		<?php } ?>


                        </div>
                        </p></div>

                <?php

                  }

                 $reponse->closeCursor(); 

                ?>
            </div>
        </main>

     </body>

    <?php include("footer.php"); ?>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>

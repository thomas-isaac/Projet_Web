
<header>
         <div id="conteneur">
          <img src="pictures/Logo_CESI.png" id="Logo_CESI" class="element">
          <img src="pictures/Logo_BDE.png" id="Logo_BDE" class="element">
          <div id="conteneur15">
            <?php 
           session_start();
            if ($_SESSION['log'] == 1)
           { ?>
             <a id="btn1" href="logout.php" style="width: 100.5%; height: 9%; font-size: 111%;">Se déconnecter</a>
              <?php
            }
            else
            { ?>
             <a id="btn1" href="connexion.php" style="width: 9%; height: 8%; font-size: 140%;">Connexion</a>
            <?php
             } ?>
            <a href="panier.php" id="panier"><img src="pictures/panier.png" id="panier"></a>
          </div>
        </div>

        <div id="conteneur1">
          <a id="btn" href="accueil.php">Accueil</a>
          <a id="btn" href="boutique.php">Boutique</a>
          <a id="btn" href="event.php">Events</a>
          <a id="btn" href="boite.php">Boite à idées</a>
        </div>
</header>

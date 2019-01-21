   <?php
         $bdd = new PDO('mysql:host=localhost;dbname=projet_web', 'root', '');
         $resultat=$bdd->query("SELECT * FROM produit");
         $resultat->setFetchMode(PDO::FETCH_ASSOC);
         foreach ($resultat as $col)
         {
             echo "<a href=\"apercu.php?id=" . $col['ID_PRODUIT'] . "\">" . $col['NOM_PRODUIT'] . "</a><br />";
         }
      ?>


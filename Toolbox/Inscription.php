<!doctype html>

<html lang="fr">

    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">        <link rel="stylesheet"href="/style/vendors/fontawesome/css/all.min.css"/>
        <link href= "style.css" rel="stylesheet"  type="text/css"/>
        <link rel="icon" type="image/png" href="pictures/Logo_BDE.png"/>      
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Insription</title>
    </head>

<body>
        <?php include("header.php"); ?>

        <main>
            <form  id="form" method="post" action="scriptInscription.php" autocomplete="on"> 
                                <h1> Inscription </h1> <br>
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u" >Nom : </label><br>
                                    <input name="nom" required="required" type="text" placeholder="Nom" />
                                </p><br>

                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u" >Prénom : </label><br>
                                    <input name="prenom" required="required" type="text" placeholder="Prenom" />
                                </p><br>

                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u" >Mail : </label><br>
                                    <input name="mail" required="required" type="text" placeholder="Mail" />
                                </p><br>

                                <p>
                                    <strong>Centre :</strong>
                                     <select name="ville"> 
                                  
                                        <?php
                                         $resultat=$bdd->query("SELECT * FROM centre");
                                         $resultat->setFetchMode(PDO::FETCH_ASSOC);
                                         foreach ($resultat as $data)
                                         {
                                         echo  '<option value="' . $data['VILLE'] . '">' . $data['VILLE'] . '</option>';
                                         }
                                        ?>

                                    </select>
                                    </p><br>
                                <p>     
                                    <label for="passwordsignup" class="youpasswd" data-icon="p" >Mot de passe : </label><br>
                                    <input name="motDePasse" required="required" type="password" placeholder="Mot de passe"/>
                                </p><br>

                                <p>     
                                    <label for="passwordsignup" class="youpasswd" data-icon="p" >Confirmer le Mot de passe : </label><br>
                                    <input name="CmotDePasse" required="required" type="password" placeholder="Mot de passe"/>
                                </p><br>
                                
                                <p class="signin button" > 
                                    <input type="submit" value="S'inscrire" id="signin-button"/> 
                                </p>
                                <input type="checkbox" name="Metions"/> <label for="Mentions">J'ai lu et accepté <a href="mentions.php#mentions"> les mentions légales</a> et <a href="mentions.php#politique"> les mentions légales</a></label><br>
                                <p class="change_link">  
                                    Déjà inscrit ?
                                    <a href="connexion.php" class="to_register"> Connexion </a>
                                </p>
            </form>
        </main>

     </body>

     <?php include("footer.php"); ?>

</html>

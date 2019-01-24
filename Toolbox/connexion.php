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

    <form id="form" method="post" action="scriptConnexion.php" autocomplete="on">
                                <h1>Connexion</h1> 
                                <p> 
                                    <label for="mail" class="uname" data-icon="u" > Mail : </label>
                                    <input id="mail" name="mail" required="required" type="text" placeholder="mail"/>
                                </p>
                                <p> 
                                    <label for="motDePasse" class="youpasswd" data-icon="p"> Mot de passe : </label>
                                    <input id="password" name="motDePasse" required="required" type="password" placeholder="Mot de passe" /> 
                                </p>
                            
                                <p class="login button"> 
                                    <input type="submit" value="Connexion" /> 
                                </p>
                                <p class="change_link">
                                    Pas encore inscrit ?
                                    <a href="inscription.php" class="to_register">Inscription</a>
                                </p>
                                <p class="change_link">
                                    déconnection ?
                                    <a href="logout.php" class="to_register">logout</a>
                                </p>
                            </form>
    </main>

 </body>

 <footer>
   <h5>coucou</h5>
 </footer>

</html>


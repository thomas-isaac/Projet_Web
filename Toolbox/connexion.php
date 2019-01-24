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
    
    <?php include("header.php"); ?>
    
    <main>

   <form id="form" method="post" action="scriptConnexion.php" autocomplete="on">
            <h1>Connexion</h1><br>
            <p> 
              <label for="mail" class="uname" data-icon="u" > Mail : </label>
              <br>
              <input id="mail" name="mail" required="required" type="text" placeholder="Mail"/>
            </p>
            <br>
            <p> 
              <label for="motDePasse" class="youpasswd" data-icon="p"> Mot de passe : </label>
              <br>
              <input id="password" name="motDePasse" required="required" type="password" placeholder="Mot de passe" /> 
            </p><br>
            <p class="login button" > 
              <input type="submit" value="Connexion" id="login-button" /> 
            </p><br>
            <p class="change_link">Pas encore inscrit ?<br><a href="inscription.php" class="to_register">Inscription</a></p><br>
            <p class="change_link">
               Voulez-vous vous déconnecter ?<br>
               <a href="logout.php" class="to_register">logout</a>
            </p>
    </form>
    <br>
    
    </main>

 </body>

 <?php include("footer.php"); ?>

</html>


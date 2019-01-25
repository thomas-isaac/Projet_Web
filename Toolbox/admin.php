<!doctype html>

<html lang="fr">

    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">        
        <link rel="stylesheet"href="/style/vendors/fontawesome/css/all.min.css"/>
        <link href= "style.css" rel="stylesheet"  type="text/css"/>
        <link rel="icon" type="image/png" href="pictures/Logo_BDE.png"/>      
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Page Admin</title>
    </head>

<body>
        <?php include("header.php"); ?>

        <main>
          <div id="adminpage">
          <div id="download">
          <h2>Si vous voulez télécharger tout les photos</h2><br />
          <p><a id="btn2" href="dl.php">Télécharger</a></p>  
          </div>
          <div id="signaler">
          <h2>Si vous souhaitez signaler un contenu non approprié</h2><br/>
          <p><a id="btn2" href="report.php">Signaler</a></p>
          </div>
          </div>
        </main>

     </body>

     <?php include("footer.php"); ?>

</html>
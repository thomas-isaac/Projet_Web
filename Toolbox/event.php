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
        <?php include("header.php"); ?>

        <main>
        <?php 
        session_start();
        if($_SESSION['log'] == 1){ ?>

                            <form  method="post" action="scriptEvent.php" autocomplete="on" enctype="multipart/form-data"> 
                                <h1> idée </h1> 
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u" >nom : </label>
                                    <input id="usernamesignup" name="nom" required="required" type="text" placeholder="nom" />
                                </p>

                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u" >description : </label>
                                    <input id="usernamesignup" name="description" required="required" type="text" placeholder="description" />
                                </p>

                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u" >catégorie : </label>
                                    <input id="usernamesignup" name="CATEGORY" required="required" type="text" placeholder="catégorie" />
                                </p>
                        
                                <p>     
                                <label for="passwordsignup" class="youpasswd" data-icon="p" >Image : </label>
                                    <input type="file" name="fileToUpload" id="fileToUpload">
                                </p>
                                
                                <p class="signin button"> 
                                    <input type="submit" value="Upload Image" name="submit"/> 
                                </p>
                            </form>
                                    
        <?php }else{
            echo "connecter vous pour acceder a ce contenue";?>
        <li><a href="connexion.php">connexion</a></li>
        
        <?php } ?>
        </main>

</body>

<?php include("footer.php"); ?>

</html>

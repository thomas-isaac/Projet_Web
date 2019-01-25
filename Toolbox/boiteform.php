<!doctype html>

<html lang="fr">

    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">        <link rel="stylesheet"href="/style/vendors/fontawesome/css/all.min.css"/>
        <link href= "style.css" rel="stylesheet"  type="text/css"/>
        <link rel="icon" type="image/png" href="pictures/Logo_BDE.png"/>      
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Proposer un event</title>
    </head>

<body>

    <?php include("header.php"); ?>

    <main>
        <?php 
        if($_SESSION['log'] == 1){ ?>
                        <div id="idée" style="text-align: center;">
                        <br><br>
                            <form  method="post" action="scriptEvent.php" autocomplete="on" enctype="multipart/form-data"> 
                                <h2> Vous avez une idée ? </h2> <br><br>
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u" >Nom : </label>
                                    <input id="usernamesignup" name="nom" required="required" type="text" placeholder="Nom" />
                                </p>

                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u" >Description : </label>
                                    <input id="usernamesignup" name="description" required="required" type="text" placeholder="Description" />
                                </p>

                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u" >Catégorie : </label>
                                    <input id="usernamesignup" name="CATEGORY" required="required" type="text" placeholder="Catégorie" />
                                </p>
                        
                                <p>     
                                <label for="passwordsignup" class="youpasswd" data-icon="p" >Image : </label>
                                    <input type="file" name="fileToUpload" id="fileToUpload">
                                </p>
                                
                                <p class="signin button"> 
                                    <input type="submit" id="btn1" value="Upload Image" name="submit" style="width: 8%;"/> 
                                </p>
                                <br>
                            </form>
                        </div>
                                    
        <?php }else{ ?>
        <h2> Vous devez vous connecter pour pouvoir proposer un event </h2>
        <a href="connexion.php">connexion</a>
        
        <?php } ?>
</main>

     </body>

     <?php include("footer.php"); ?>

</html>

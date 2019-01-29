<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">        <link rel="stylesheet"href="/style/vendors/fontawesome/css/all.min.css"/>
        <link href= "style.css" rel="stylesheet"  type="text/css"/>
        <link rel="icon" type="image/png" href="pictures/Logo_BDE.png"/>      
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Ajouter un produit</title>
    </head>

    <body>
  
    <?php include("headerBoutique.php"); ?>

        <main>

        <div id="corps">

            <div class="container">
            
            
            <section>               
                <div id="container" >
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="register" class="animate form">
                            <?php 
                            if($_SESSION['logBDE'] == 1){ ?>
                            <form enctype="multipart/form-data" method="post" action="scriptProduit.php" autocomplete="on"> 
                                <h1> Inscription </h1> 
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u" >nom : </label>
                                    <input id="usernamesignup" name="nom" required="required" type="text" placeholder="nom" />
                                </p>

                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u" >description : </label>
                                    <input id="usernamesignup" name="description" required="required" type="text" placeholder="description" />
                                </p>

                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u" >prix : </label>
                                    <input id="usernamesignup" name="prix" required="required" type="text" placeholder="prix" />
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
                            echo "Vous n'avez pas les droits pour accéder à ce contenue";?>
                            <li><a href="connexion.php">connection</a></li>
        
                             <?php } ?>
                        </div>
              
                    </div>
                </div>  
            </section>
        </div>

        
    </div>
    </main>
    </body>
    <?php include("footer.php"); ?>
</html>

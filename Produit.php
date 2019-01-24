<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8" />
        <title>Projet web</title>
    </head>

    <body>

    <!-- L'en-tête -->    
    <header>
    
    </header>

    <div id="corps">

<div class="container">
            
            
            <section>               
                <div id="container" >
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="register" class="animate form">
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
                        </div>
              
                    </div>
                </div>  
            </section>
        </div>

        
    </div>
    
    </body>

</html>
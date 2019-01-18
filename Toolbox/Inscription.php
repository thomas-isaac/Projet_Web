<!DOCTYPE html>

<html>

    <head>
        <?php $bdd = new PDO('mysql:host=localhost;dbname=projet_web', 'root', '');?>
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
                            <form  method="post" action="scriptInscription.php" autocomplete="on"> 
                                <h1> Inscription </h1> 
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u" >nom : </label>
                                    <input id="usernamesignup" name="nom" required="required" type="text" placeholder="nom" />
                                </p>

                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u" >prénom : </label>
                                    <input id="usernamesignup" name="prenom" required="required" type="text" placeholder="prenom" />
                                </p>

                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u" >mail : </label>
                                    <input id="usernamesignup" name="mail" required="required" type="text" placeholder="mail" />
                                </p>

                                <p>
                                    centre :
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
                                    </p>
                                <p>     
                                    <label for="passwordsignup" class="youpasswd" data-icon="p" >Mot de passe : </label>
                                    <input id="passwordsignup" name="motDePasse" required="required" type="password" placeholder="mot de passe"/>
                                </p>

                                <p>     
                                    <label for="passwordsignup" class="youpasswd" data-icon="p" >Confirmer le Mot de passe : </label>
                                    <input id="passwordsignup" name="CmotDePasse" required="required" type="password" placeholder="mot de passe"/>
                                </p>
                                
                                <p class="signin button"> 
                                    <input type="submit" value="S'inscrire"/> 
                                </p>
                                <p class="change_link">  
                                    Déjà inscrit ?
                                    <a href="http://localhost/projet_web/connexion" class="to_register"> Connexion </a>
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
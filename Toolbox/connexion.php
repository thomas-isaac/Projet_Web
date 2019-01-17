<!DOCTYPE html>

<!--####################################
 Auteur : Emma Prudent
 Date : 2017
 Contexte : Prosit Exia CESI - PHP/BDD
 #######################################-->

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
                        <div id="login" class="animate form">
                            <form method="post" action="scriptConnexion.php" autocomplete="on">
                                <h1>Connexion</h1> 
                                <p> 
                                    <label for="mail" class="uname" data-icon="u" > Mail : </label>
                                    <input id="username" name="mail" required="required" type="text" placeholder="mail"/>
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
                                    <a href="http://localhost/projet_web/inscription" class="to_register">Inscription</a>
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
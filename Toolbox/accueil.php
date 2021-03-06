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
        <?php include("header.php"); 
        $_SESSION['logcesi']=0;
        $_SESSION['logBDE']=0;
        $_SESSION["log"]=0; ?>

        <main>
          <div id="slider" class="carousel slide" data-ride="carousel">
  				<ol class="carousel-indicators">
    				<li data-target="#slider" data-slide-to="0" class="active"></li>
    				<li data-target="#slider" data-slide-to="1"></li>
    				<li data-target="#slider" data-slide-to="2"></li>
  				</ol>
  				<div class="carousel-inner">
    			<div class="carousel-item active">
                      <img class="d-block w-100" src="pictures/first.jpg" alt="First slide">
                      <div class="carousel-caption d-none d-md-block">
                      <a href="event.php" id="liencar"><h3>Gala du BDE 2011</h3></a>
                      </div>
    			</div>
   				<div class="carousel-item">
                      <img class="d-block w-100" src="pictures/second.png" alt="Second slide">
                      <div class="carousel-caption d-none d-md-block">
                      <a href="boutique.php" id="liencar"><h3>Acheter les bonnets du BDE ! Ils sont beaux, ils sont frais !</h3></a>
                        </div>
    			</div>
    			<div class="carousel-item">
                      <img class="d-block w-100" src="pictures/third.gif" alt="Third slide">
                      <div class="carousel-caption d-none d-md-block">
                        <a href="boiteform.php" id="liencar"><h3>Vous avez une idée d'événement et vous voulez la partager ? Allez dans la boite à idées !</h3></a>
                      </div>
    			</div>
  				<a class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
    				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    				<span class="sr-only">Previous</span>
  				</a>
  				<a class="carousel-control-next" href="#slider" role="button" data-slide="next">
    				<span class="carousel-control-next-icon" aria-hidden="true"></span>
   					<span class="sr-only">Next</span>
  				</a>
			</div>
        </main>
            	<script type="text/javascript"> alert('En venant sur notre site vous acceptez l\'utilisation de cookie');</script>
        	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
     </body>

     <?php include("footer.php"); ?>

</html>

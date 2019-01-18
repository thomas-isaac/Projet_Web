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
<?php
    $data = null;
    if ( isset($_GET['id']) ){
        $id = $_GET['id'];
        $bdd = new PDO('mysql:host=localhost;dbname=projet_web', 'root', '');
        $req = $bdd->prepare('SELECT * FROM produit WHERE produit.ID_PRODUIT = :id');
        $req->bindValue(':id', $id , PDO::PARAM_STR);
        $req->execute();
        $data = $req->fetch(PDO::FETCH_OBJ);


            echo '<img src="data:image/png;base64,'.base64_encode($data->IMAGE_PRODUIT).'"/>';
        

    } else {
        echo "Mauvais id d'image";
    }

?>

</body>

</html>

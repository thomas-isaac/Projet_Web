<?php
$bdd = new PDO('mysql:host=localhost;dbname=projet_web;charset=utf8', 'root', '');
$nom = $_POST['nom'];
$description = $_POST['description'];
$prix = $_POST['prix'];
$CATEGORY = $_POST['CATEGORY'];
//echo json_encode($_FILES['fileToUpload']["name"]);
    

    $requete = $bdd->prepare("INSERT INTO produit (NOM_PRODUIT, DESCRIPTION_PRODUIT, PRIX_PRODUIT,CATEGORY_PRODUIT, IMAGE_PRODUIT) VALUES( :nom, :description, :prix, :CATEGORY, :Image)");
    $requete->bindValue(':nom', $nom, PDO::PARAM_STR);
    $requete->bindValue(':description', $description, PDO::PARAM_STR);
    $requete->bindValue(':prix', $prix, PDO::PARAM_STR);
    $requete->bindValue(':CATEGORY', $CATEGORY, PDO::PARAM_STR);
    $requete->bindValue(':Image', $_FILES['fileToUpload']["name"], PDO::PARAM_STR);
    $requete->execute();


        $target_dir = "public/image/";
        $target_file = $target_dir . basename($_FILES['fileToUpload']["name"]);
        $uploadOk = 0;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }

?>
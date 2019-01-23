<?php
$bdd = new PDO('mysql:host=localhost;dbname=projet_web;charset=utf8', 'root', '');
$nom = $_POST['nom'];
$description = $_POST['description'];
$prix = $_POST['prix'];
$CATEGORY = $_POST['CATEGORY'];
//$Image = $_POST['fileToUpload']["name"];
echo json_encode($_FILES['fileToUpload']["name"]);
    
    echo "Valide";

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
    $check = getimagesize($_FILES['fileToUpload']["tmp_name"]);
    if($check !== false) {
        if (move_uploaded_file($_FILES['fileToUpload']["tmp_name"], $target_file)) {
            echo "The file ". basename($_FILES['fileToUpload']["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

?>
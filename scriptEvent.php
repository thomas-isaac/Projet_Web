<?php
$bdd = new PDO('mysql:host=localhost;dbname=projet_web;charset=utf8', 'root', '');

$nom = $_POST['nom'];
$description = $_POST['description'];
$CATEGORY = $_POST['CATEGORY'];

        

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

                $requete = $bdd->prepare("INSERT INTO event (NOM_EVENT, DESCRIPTION_EVENT, CATEGORY_EVENT, ID_USER) VALUES( :nom, :description, :CATEGORY, :user)");
                $requete->bindValue(':nom', $nom, PDO::PARAM_STR);
                $requete->bindValue(':description', $description, PDO::PARAM_STR);
                $requete->bindValue(':CATEGORY', $CATEGORY, PDO::PARAM_STR);
                $requete->bindValue(':user', "1", PDO::PARAM_STR);
                $requete->execute();
        
                $req = $bdd->prepare("INSERT INTO image (LIEN_IMAGE) VALUES(:image)");
                $req->bindValue(':image', $_FILES["fileToUpload"]["name"], PDO::PARAM_STR);
                $req->execute();

                $reqs = $bdd->prepare("INSERT INTO avoir(ID_IMAGE, ID_EVENT) VALUES((SELECT ID_IMAGE FROM image WHERE LIEN_IMAGE = :image), (SELECT MAX(ID_EVENT) FROM event))");
                $reqs->bindValue(':image', $_FILES["fileToUpload"]["name"], PDO::PARAM_STR);
                $reqs->execute();
    


            } else {
                echo "Sorry, there was an error uploading your file.";
            }
            
            
            $file = $target_file;


            ob_start();

            $img = imagecreatefromjpeg($file);
            imagepng($img);

            // get contents from the buffer
            $contents = ob_get_clean();

            $zip = new ZipArchive();
            $zip->open('pictures.zip', ZipArchive::CREATE);

            // and put them in the zip file...
            $zip->addFromString($_FILES["fileToUpload"]["tmp_name"], $contents);
            $zip->close();
        }

?>

<?php

require_once "../config.inc.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
    $idToUpdate = $_POST['id'];
    $Projecten = $connection->query("SELECT * FROM `items` WHERE `ItemId` = $idToUpdate");

    if ($Projecten->num_rows > 0) {
        $row = $Projecten->fetch_assoc();

            $BestandURL = $row['Imagelink']; 
            $ServerUrl = "./uploads/" . substr($BestandURL, strrpos($BestandURL, '/') + 1);

            echo $BestandURL;

            if(isset($_FILES["file"])) {
                $uploadDir = "uploads/";
                $targetFile = $uploadDir . basename($_FILES["file"]["name"]);
                $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

                if ($fileType == "jpg" || $fileType == "png" || $fileType == "gif") {
                    if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
                        $connection->query("UPDATE `items` SET Imagelink = './server/$targetFile' WHERE ItemId = $idToUpdate");
                        if (file_exists($ServerUrl)) {
                            unlink($ServerUrl); 
                        }
                    }
                }
            }

            $Naam = $_POST["Naam"];
            $Prijs = $_POST["Prijs"];
            $Vooraad = $_POST["Vooraad"];
            $beschrijving = $_POST["Beschrijving"];

            $connection->query("UPDATE `items` SET Naam = '$Naam', Prijs = '$Prijs', Vooraad = '$Vooraad', Beschrijving = '$beschrijving' WHERE `items`.`ItemId` = $idToUpdate");
            
    }
    header("Location: ../Admin.php");
}

?>
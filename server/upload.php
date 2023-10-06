<?php

require_once "../config.inc.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["file"]) && !empty($_POST["Naam"]) && !empty($_POST["Prijs"]) && !empty($_POST["Beschrijving"]) && !empty($_POST["Vooraad"])) {
    
    $uploadDir = "uploads/";
    $targetFile = $uploadDir . basename($_FILES["file"]["name"]);
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    if ($fileType == "jpg" || $fileType == "png" || $fileType == "gif") {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
            
            $Naam = $_POST["Naam"];
            $Prijs = $_POST["Prijs"];
            $Vooraad = $_POST["Vooraad"];
            $beschrijving = $_POST["Beschrijving"];

            $connection->query("INSERT INTO Items (Naam, Beschrijving, Vooraad, Prijs, Imagelink) VALUES ('$Naam', '$beschrijving', '$Vooraad', '$Prijs', './server/$targetFile')");
            $_SESSION["melding"] = " ";
        }
    } else {
        $_SESSION["melding"] = "Alleen JPG, PNG en GIF bestanden zijn toegestaan.";
    }
} else {
    $_SESSION["melding"] = "Niet alle velden zijn ingevoerd.";
}

header("Location: ../Admin.php");

?>
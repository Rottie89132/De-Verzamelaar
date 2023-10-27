<?php

require_once "../config.inc.php";

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $Naam = $_POST["naam"];
    $Telefoon = $_POST["telefoon"];
    $Email = $_POST["email"];
    $Adres = $_POST["adres"];

    foreach ($_POST["ItemID"] as $ItemID) {

        $sql = "INSERT INTO `bestelingen` ( `Naam`, `Tel`, `Email`, `Adress`, `ItemID`) VALUES ('$Naam', '$Telefoon', '$Email', '$Adres', '$ItemID')";
        $connection->query($sql);
            
    }

}

header("Location: ../Succes.html");


?>
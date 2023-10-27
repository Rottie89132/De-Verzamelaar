<?php 

require_once "../config.inc.php";

if ($_SERVER["REQUEST_METHOD"] == "GET" ) {
    $idToGet = $_GET['id'];

    $Items = $connection->query("SELECT * FROM `Items` WHERE `ItemId` = $idToGet");
    
    if ($Items->num_rows > 0) {
    $itemsArray = [];

        while ($row = $Items->fetch_assoc()) {
        $itemsArray[] = $row;
        }
    }

    header('Content-Type: application/json');
    echo json_encode($itemsArray);

}








?>
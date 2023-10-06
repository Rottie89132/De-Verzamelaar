<?php 

require_once "../config.inc.php";

if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    $id = $_GET['id'];
    
    
    $message = "een fout is opgetreden";
    $status = 404;

    $fetch = $connection->query("SELECT * FROM `Items` WHERE `ItemId` = $id");

    if ($fetch->num_rows > 0) {
        while ($FetchItem = $fetch->fetch_assoc()) {
            $BestandURL = ucfirst($FetchItem['Imagelink']); 
            $ServerUrl = "./uploads/" . substr($BestandURL, strrpos($BestandURL, '/') + 1);

            if (file_exists($ServerUrl)) {
                unlink($ServerUrl); 
            }
        }
        

        $connection->query("DELETE FROM `Items` WHERE `ItemId` = $id");
        $message = "Item deleted successfully";
        $status = 200;

    }
    
    $responseData = [
        'message' => "$message",
        'status' => "$status" ,
    ];

    header('Content-Type: application/json');
    echo json_encode($responseData);
}


?>
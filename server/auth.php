<?php

$responseData = [
    'message' => "Ongeldige Invoer",
    'status' => "400" ,
];

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_GET["PassCode"])) {
    $Code = $_GET["PassCode"];

    if($Code == "12345678") { 
        setcookie("TokenUser", $Code, time() + 3600, "/");
        echo json_encode([
            'message' => "Geldige Invoer",
            'status' => "200" ,
        ]);
    } 
    else {
        header('Content-Type: application/json');
        echo json_encode($responseData);
    }
}
else {
    header('Content-Type: application/json');
    echo json_encode($responseData);
}


?>
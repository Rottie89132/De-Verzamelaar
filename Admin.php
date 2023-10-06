<?php 

require_once "config.inc.php";
session_start();
$msg = "";

if(isset($_SESSION["melding"])) {
    $msg = $_SESSION["melding"];
    $_SESSION["melding"] = " ";
}


$Items = $connection->query("SELECT * FROM `Items`");

if ($Items->num_rows > 0) {
    $toonItems = '';
    while ($FetchItem = $Items->fetch_assoc()) {
        $ItemId = ucfirst($FetchItem['ItemId']);
        $Naam = ucfirst($FetchItem['Naam']);
        $Prijs = ucfirst($FetchItem['Prijs']);
        $Vooraad = ucfirst($FetchItem['Vooraad']);
        $Imagelink = ucfirst($FetchItem['Imagelink']); 
        $toonItems .= "
        <div class=' font-bold bg-[#B54136] bg-opacity-80 p-4 rounded-xl'>
            <img src='$Imagelink' class='p-2 mb-2 bg-white bg-opacity-10 rounded-xl'></img>
            <div class='flex gap-2'>
                <button class='px-4 text-black bg-white rounded-lg'><i class='fa-solid fa-pen-to-square'></i></button>
                <button onclick='DeleteFiles($ItemId)' class='px-4 text-red-500 bg-white rounded-lg'><i class='fa-solid fa-trash-can'></i></button>
                <p class='px-4 text-black bg-white rounded-lg'> $Vooraad Op vooraad</p>
            </div>
        </div>";
    }
} else {
    $toonItems = '';
} 
include_once("Admin_view.php");



?>
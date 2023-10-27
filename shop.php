<?php 
require_once "config.inc.php";

$Items = $connection->query("SELECT * FROM `Items`");

if ($Items->num_rows > 0) {
    $toonItems = '';
    while ($FetchItem = $Items->fetch_assoc()) {
        $ItemID = ucfirst($FetchItem['ItemId']);
        $Naam = ucfirst($FetchItem['Naam']);
        $Prijs = ucfirst($FetchItem['Prijs']);
        $Beschrijving = ucfirst($FetchItem['Beschrijving']);
        $Vooraad = ucfirst($FetchItem['Vooraad']);
        $Imagelink = ucfirst($FetchItem['Imagelink']); 
        $toonItems .= "
        <div class=' font-bold bg-[#B54136] bg-opacity-80 p-4 rounded-xl'>
            <img src='$Imagelink' class='w-full p-2 mb-2 bg-white h-52 bg-opacity-10 rounded-xl'></img>
            <p class='text-white '>$Naam</p>
            <p class='mb-2 font-normal text-white'>$Beschrijving</p>
            <div class='flex gap-2'>
                <button onclick='AddToCard($ItemID)' class='px-4 text-black bg-white rounded-lg'>€ $Prijs</button>
                <!-- <button class='px-4 text-black bg-white rounded-lg'> $Vooraad Beschikbaar</button> -->
            </div>
        </div>";
    }
} else {
    $toonItems = '';
} 
include_once("shop_view.php");


?>



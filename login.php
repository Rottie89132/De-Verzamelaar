<?php

    if (isset($_COOKIE['TokenUser']) && $_COOKIE['TokenUser'] == "12345678") {
        header("Location: ./Admin.php");
    } else {
        include_once("Login_view.php");
    }

?>
<?php

session_start();
if ($_SERVER["REQUEST_METHOD"] == "GET") {

    $centre = $_GET["centre"];

    if ($centre == "") {
        $error = "Veuillez saisir un centre";
        $_SESSION["error"] = $error;
        header("Location: http://localhost/Afpa/index.php ");
    } else {
        $result2 = $centre;
        $_SESSION["result2"] = $result2;
        header("Location: http://localhost/Afpa/reservation.php ");
    }
}
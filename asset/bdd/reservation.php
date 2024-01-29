<?php

session_start();

$nameError = $fisrtNameError = $birthDayError = $numSessionError = $dateDError = $dateAError = $dateError = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["nom"];
    $fisrtName = $_POST["prenom"];
    $birthDay = $_POST["dateNaissance"];
    $numSession = $_POST["numSession"];
    $dateD = $_POST["dateDepart"];
    $dateA = $_POST["dateArrivee"];
    $submit = $_POST["submit"];
    $birthDate = DateTime::createFromFormat('d-m-Y', $birthDay);

    if ($name == "") {
        $nameError = "Veuillez saisir votre nom";
    } else if ($fisrtName == "") {
        $fisrtNameError = "Veuillez saisir votre prénom";
    } else if ($birthDay == "") {
        $birthDayError = "Veuillez saisir votre date de naissance";
    } else if ($birthDay === false) {
        $birthDayError = "Veuillez saisir une date de naissance valide";
    } else if ($birthDate > new DateTime()) {
        $birthDayError = "Veuillez saisir une date de naissance inférieure à la date du jour";
    } else {
        $now = new DateTime();
        $fourteenYearsAgo = $now->modify('-16 years');
        if ($birthDate < $fourteenYearsAgo) {
            $birthDayError = "Vous devez avoir au moins 16 ans";
        } else if ($numSession == "") {
            $numSessionError = "Veuillez saisir votre numéro de session";
        } else if ($dateD == "") {
            $dateDError = "Veuillez saisir votre date de départ";
        } else if ($dateA == "") {
            $dateAError = "Veuillez saisir votre date d'arrivée";
        } else if ($dateA > $dateD) {
            $dateError = "Veuillez saisir une date de départ supérieure à la date d'arrivée ";
        } else if ($submit == "") {
            $result = "Votre réservation a bien été prise en compte";

            $_SESSION["result"] = $result;
            $_SESSION["reservationNumber"] = 'R' . strtoupper(substr($name, 0, 1) . substr($fisrtName, 0, 1)) . rand(1000, 9999);
            $_SESSION["name"] = $name;
            $_SESSION["firstName"] = $fisrtName;
            $_SESSION["birthDay"] = $birthDay;
            $_SESSION["dateD"] = $dateD;
            $_SESSION["dateA"] = $dateA;
            header("Location: http://localhost/Afpa/recap.php");
            exit;

        } else {
            $error = "Veuillez saisir tous les champs";
        }
    }
}
$error = "Veuillez remplir tous les champs obligatoires";
$_SESSION["nameError"] = $nameError;
$_SESSION["fisrtNameError"] = $fisrtNameError;
$_SESSION["birthDayError"] = $birthDayError;
$_SESSION["numSessionError"] = $numSessionError;
$_SESSION["dateDError"] = $dateDError;
$_SESSION["dateAError"] = $dateAError;
$_SESSION["dateError"] = $dateError;
header("Location: http://localhost/Afpa/reservation.php");
exit;
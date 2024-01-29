<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./asset/css/recap.css">
    <!-- <link rel="stylesheet" href="./asset/css/style.css"> -->
    <title>AFPA Réservation de chambres</title>
</head>

<body>
    <header>
        <h1>Bienvenue sur le site de réservation de chambres de l'AFPA</h1>
        <a href="index.php"><img class="img"
                src="./asset/img/946782-1390996164-946781-1390996147-visuel-afpa-site.png"></a>

    </header>
    <h2>Recapitulatife de réservation</h2>
    <div>
        <p class="resultat">
            <?php
            session_start();
            $result = $_SESSION["result"];
            $reservationNumber = $_SESSION["reservationNumber"];
            $name = $_SESSION["name"];
            $fisrtName = $_SESSION["firstName"];
            $birthDay = $_SESSION["birthDay"];
            $dateA = $_SESSION["dateA"];
            $dateD = $_SESSION["dateD"];
            echo "<br>";
            echo "<p>" . $result . "</p>";
            echo "<p>Votre numéro de réservation est : " . $reservationNumber . "</p>";
            echo "<p> Votre Nom est " . $name . "</p>";
            echo " <p> Votre prénom est " . $fisrtName . "</p>";
            echo "<p> Votre date de naissance est le " . $birthDay . "</p>";
            echo " <p> Votre date d'arrivée est le " . $dateA . "</p>";
            echo " <p> Votre date de départ est le " . $dateD . "</p>";
            echo "<br>";
            ?>
        </p>
    </div>
    <footer>
        <h3>Afpa</h3>
        <p>
            <a href="https://www.afpa.fr/">Site officiel de l'AFPA</a>
        </p>

    </footer>


</body>

</html>
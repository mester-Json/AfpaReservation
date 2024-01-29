<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./asset/css/form.css">
    <!-- <link rel="stylesheet" href="./asset/css/style.css"> -->
    <title>AFPA Réservation de chambres</title>
</head>

<body>

    <header>
        <h1>Bienvenue sur le site de réservation de chambres de l'AFPA</h1>
        <a href="index.php"><img class="img"
                src="./asset/img/946782-1390996164-946781-1390996147-visuel-afpa-site.png"></a>
    </header>

    <h2>Formulaire de réservation pour
        <?php
        session_start();
        $result2 = $_SESSION["result2"];
        echo $result2;
        ?>
    </h2>
    <form action="./asset/bdd/reservation.php" method="post">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom">
        <label for="">
            <?php
            session_start();
            $nameError = $_SESSION["nameError"];
            echo $nameError;
            ?>
        </label>

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom">
        <label for="">

            <?php
            session_start();
            $fisrtNameError = $_SESSION["fisrtNameError"];
            echo $fisrtNameError;
            ?>
        </label>
        <label for="dateNaissance">Date de naissance :</label>
        <input type="date" id="dateNaissance" name="dateNaissance">
        <label for="">
            <?php
            session_start();
            $birthDayError = $_SESSION["birthDayError"];
            echo $birthDayError;
            ?>

        </label>
        <label for="numSession">Numéro de session de formation :</label>
        <input type="text" id="numSession" name="numSession">
        <label for="">
            <?php
            session_start();
            $numSessionError = $_SESSION["numSessionError"];
            echo $numSessionError;
            ?>
        </label>
        <label for="dateArrivee">Date d'arrivée :</label>
        <input type="date" id="dateArrivee" name="dateArrivee">
        <label for="">
            <?php
            session_start();
            $dateAError = $_SESSION["dateAError"];
            $dateError = $_SESSION["dateError"];
            echo $dateError;
            echo $dateAError;
            ?>
        </label>
        <label for="dateDepart">Date de départ :</label>
        <input type="date" id="dateDepart" name="dateDepart">
        <label for="">
            <?php
            session_start();
            $dateDError = $_SESSION["dateDError"];
            $dateError = $_SESSION["dateError"];
            echo $dateError;
            echo $dateDError;

            ?>
        </label>
        <input type="submit" value="Réserver">

    </form>

    <footer>
        <h3>Afpa</h3>
        <p>
            <a href="https://www.afpa.fr/">Site officiel de l'AFPA</a>
        </p>

    </footer>


</body>

</html>
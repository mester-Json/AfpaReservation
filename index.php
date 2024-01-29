<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./asset/css/style.css">
    <title>AFPA Réservation de chambres</title>
</head>

<body>
    <header>
        <h1>Bienvenue sur le site de réservation de chambres de l'AFPA</h1>
        <div>
            <a href="index.php"><img class="img"
                    src="./asset/img/946782-1390996164-946781-1390996147-visuel-afpa-site.png"></a>
        </div>
    </header>

    <form action="./asset/bdd/centre.php" method="get">
        <label for="centre">Rechercher un centre :</label>
        <input type="text" id="centre" name="centre">
        <label for="">
            <?php
            session_start();
            $error = $_SESSION["error"];
            echo $error;
            ?>
        </label>
        <input type="submit" value="Rechercher">
    </form>


    <footer>
        <h3>Afpa</h3>
        <p>
            <a href="https://www.afpa.fr/">Site officiel de l'AFPA</a>
        </p>

    </footer>

</body>

</html>
<?php
// démarrer la session
session_start();
$nom_c = "";
$nom_s = "";
if (isset($_COOKIE['nom'])) {
    $nom_c = $_COOKIE['nom'];
}
if (isset($_SESSION['nom'])) {
    $nom_s = $_SESSION['nom'];
}


if (str_contains($_SERVER['HTTP_REFERER'], 'test.php')) {
    session_unset(); // supprimer toutes les variables session
    session_destroy();
    $nom_c = "";
    $nom_s = "";
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>

<body>
    <h1>Cookies et sessions</h1>
    <h2>Cookies</h2>
    <p>Nom : <?php echo $nom_c ?></p>
    <p>Nom : <?= $nom_c ?></p>
    <h2>Sessions</h2>
    <p>Nom : <?php echo $nom_s ?></p>
    <p>Nom : <?= $nom_s ?></p>
    <p>
        <a href="test.php">
            Vider la session
        </a>
    </p>
    <p>
        <a href="utilisateur.php">
            Utilisateur
        </a>
    </p>
</body>

</html>
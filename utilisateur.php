<?php
// démarrer la session
session_start();

if (is_null($_SERVER['HTTP_REFERER']) or (!str_contains($_SERVER['HTTP_REFERER'], 'index.php') and !str_contains($_SERVER['HTTP_REFERER'], 'inscription.php'))) {
    header("location: index.php"); // redirection
    exit(); // ne pas lire la suite
}
// var_dump($_SERVER);
//   'REQUEST_METHOD' => string 'GET' (length=3)
//   'HTTP_REFERER' => string 'http://localhost/php-web/' (length=25)

$username = "Doe";
if ($_REQUEST['username'] != "") {
    $username = $_REQUEST['username'];
}
$civilite = "madame";
if (isset($_REQUEST['genre']) and $_REQUEST['genre'] == 'homme') {
    $civilite = "monsieur";
}


$age = $_REQUEST['age'];
$ville = $_REQUEST['ville'];

// ajouter un cookie
setcookie("nom", $username);

// ajouter des données dans la session
$_SESSION['nom'] = $username;
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion d'utilisateur</title>
    <?php include "./_dependencies.php" ?>

</head>

<body>
    <?php include "./_menu.php" ?>

    <h1>Gestion d'utilisateur</h1>
    <p>
        Bonjour
        <?php
        echo "$civilite $username, vous avez $age ans et êtes de $ville";
        ?>
        <a href="test.php">Consulter les cookies et les sessions</a>
    </p>
</body>

</html>
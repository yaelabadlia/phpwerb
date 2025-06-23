<?php
$username = "Doe";
if ($_GET['username'] != "") {
    $username = $_GET['username'];
}
$civilite = "madame";
if (isset($_GET['genre']) and $_GET['genre'] == 'homme') {
    $civilite = "monsieur";
}


$age = $_GET['age'];
$ville = $_GET['ville'];
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion d'utilisateur</title>
</head>

<body>
    <h1>Gestion d'utilisateur</h1>
    <p>
        Bonjour
        <?php
        echo "$civilite $username, vous avez $age ans et êtes de $ville";
        ?>
    </p>
</body>

</html>
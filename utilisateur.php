<?php
//demarer la sessions 

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

//ajouter un coockies
setcookie("nom", $username);
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
        <a href="test.php">consulter coockies</a>
    </p>
</body>

</html>
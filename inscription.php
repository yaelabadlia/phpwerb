<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>
    <h1>Page d'inscription</h1>
    <form action="utilisateur.php" method="post">
        <fieldset>
            <legend>Données de connexion</legend>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label" for="username">Nom d'utilisateur</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" id=username autofocus name=username>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label" for="password">Mot de passe</label>
                <div class="col-sm-10">
                    <input class="form-control" type="password" id=password name=password>
                </div>
            </div>
        </fieldset>
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label" for="age">Âge</label>
            <div class="col-sm-10">
                <input class="form-control" type="number" id=age min=0 max=150 name=age>
            </div>
        </div>
        <div>
            <label class="col-sm-2 col-form-label" for="ville">Ville</label>
            <select id="ville" name=ville>
                <option selected disabled>Merci de choisir votre ville de résidence</option>
                <option value="Marseille">Marseille</option>
                <option value="Lyon">Lyon</option>
                <option value="Paris">Paris</option>
            </select>
        </div>
        <div>
            <label class="col-sm-2 col-form-label" for="remarque">Remarque</label>
            <textarea id="remarque" cols="50" rows="5" name=remarque></textarea>
        </div>
        <div>
            Genre
            <input type="radio" name=genre value=homme>Homme
            <input type="radio" name=genre value=femme>Femme

        </div>
        <div>
            Sport préféré
            <input type="checkbox" name=sport1 value=football>Football
            <input type="checkbox" name=sport2 value=handball>Handball
            <input type="checkbox" name=sport3 value=tennis>Tennis

        </div>
        <div>
            <button>
                S'inscrire
            </button>
        </div>
        <!-- <div>
            <input type="text" placeholder="Votre nom d'utilisateur">
        </div> -->
    </form>
</body>

</html>
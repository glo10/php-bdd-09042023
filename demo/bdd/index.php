<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Exercice 6</title>
</head>
<body class="container">
    <h1>Exemple d'un formulaire</h1>
    <form action="submit.php" method="post">
        <input type="text" name="firstname" class="form-control m-2" placeholder="Prénom">
        <input type="text" name="lastname" class="form-control m-2" placeholder="Nom">
        <input type="number" name="age" class="form-control m-2" placeholder="Age" min="14" max="99">
        <textarea name="comment" class="form-control m-2" placeholder="Commentaire"></textarea>
        <label for="language" class="form-label m-2">Choisissez les langues</label>
        <select name="languages[]" class="form-control m-2" multiple>
            <option value="fr">Français</option>
            <option value="en">Anglais</option>
            <option value="it">Italien</option>
            <option value="es">Espagnol</option>
        </select>
        <p class="m2">Langage de programmation favoris</p>
        <input type="radio" name="lang_fav_program" value="HTML">
        <label for="html">HTML</label>
        <input type="radio" name="lang_fav_program" value="CSS" id="css">
        <label for="css">CSS</label>
        <input type="radio" name="lang_fav_program" value="JavaScript">
        <label for="javascript">JavaScript</label>
        <input type="radio" name="lang_fav_program" value="PHP">
        <label for="php">PHP</label>
        <input type="radio" name="lang_fav_program" value="JAVA">
        <label for="java">JAVA</label>
        <p class="m2">Centre d'intérêts</p>
        <input type="checkbox" id="car" name="interests[]" value="car">
        <label for="car">Voiture</label>
        <input type="checkbox" id="cook" name="interests[]" value="cook">
        <label for="cook">Cuisine</label>
        <input type="checkbox" id="finance" name="interests[]" value="finance">
        <label for="finance">Finance</label>
        <input type="submit" value="Valider" class="m-2">
    </form>
</body>
</html>
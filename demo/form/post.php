<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <style>
        span {
            color: red;
        }
    </style>
</head>
<body>
    <h1>Accueil</h1>
    <?php
        // infos envoyées en post sont disponibles dans le tableau associatif $_POST
        // la valeur de l'attribut name d'un input ou select ou textarea est la clé et la valeur saisie, séléctionnée ou cochée correspond à la valeur du champ
        echo '<p> Bonjour <span>'.$_POST['name'].'</span></p>';
        echo '<p>Vous avez '.$_POST['age'].' ans </p>';
        echo 'Hello '.$_POST['name'];
    ?>
    <section>
        <h2>News</h2>
    </section>
</body>
</html>
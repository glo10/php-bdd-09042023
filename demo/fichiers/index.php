<?php

// import du fichier functions.php  avec son contenu (le 2 fonctions)
require_once 'functions.php';

if (isset($_FILES['picture'])) { // appel de la fonction downloadImg uniquement la clé existe = uniquement lors de la soumission du formulaire
    echo downloadImg($_FILES['picture'], uniqid('img_')) ? 'Chargement du fichier ok' : 'Chargement du fichier ko';
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo fonctions import</title>
</head>

<body>
    <?php include 'html/form.php';?>
    <?php require_once 'html/footer.php';?>
</body>

</html>
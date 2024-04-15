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
    <?php 
        /**
         * Avec include
         * Inclut le fichier si le chémin n'est pas bon,
         * la suite du code sera exécuté
         */
        include 'html/form.php';
    ?>
    <?php
        /**
         * Avec require
         * Inclut le fichier si le chémin n'est pas bon,
         * la suite du code NE SERA PAS exécuté
         * On aura une erreur fatale(le code sera arrêté brusquement au niveau de la ligne qui déclenche l'erreur, le reste du code qui vient après ne sera pas exécuté)
         */
        require_once 'html/footer.php';
    ?>
</body>

</html>
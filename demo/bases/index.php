<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bases PHP</h1>
    <?php 
    // Déclaration de variable avec le préfixe $ obligatoire 
    $name = 'Glodie';
    // Déclaration d'une constante avec la fonction define
    define('AGE', 32);
    // Affichage des informations
    echo $name;
    echo '<br>';
    echo 'Age :'; 
    echo AGE;
    ?>
</body>
</html>
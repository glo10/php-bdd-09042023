<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- attribut action de form permet de renseigner la destination du fichier
qui sera responsable du traitement à faire, ici le fichier post.php
l'attribut method permet de spécifier la méthode HTTP GET ou POST -->
    <form action="post.php" method="post">
        <input type="text" name="name" placeholder="Nom">
        <input type="number" name="age" placeholder="Age" min>
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>
<?php

/**
 * Upload d'une image
 *
 * @param array $data info sur le fichier
 * @param string $filename nom du fichier
 * @return bool
 */
function downloadImg(array $data, string $filename) : bool
{
    $pic = $data['tmp_name'];
    // si $file['tmp_name'] existe alors $tmp vaudra sa valeur sinon $tmp vaut null
    $tmp = $pic ?? null; // idem que $tmp = isset($pic)?$pic:null
    if($tmp === null) {
        return false;
    }
    // Récupération de l'extension du fichier déposé
    $extension = pathinfo($data['name'], PATHINFO_EXTENSION);
    // Fonction pour vérifier une expression régulière (permet de vérifier que la donnée respecte bien un motif qu'on a défini)
    return (preg_match('@jpeg|jpg|png@i', $extension) === 1) && move_uploaded_file($data['tmp_name'], $filename);
}

var_dump($_POST, $_FILES);

// $_FILES stocke les informations sur les fichiers qui seront déposées
if(isset($_FILES['picture'])) {
    // move_uploaded_file déplace un fichier d'un emplacement A vers un emplacement B
    // $_FILES['picture']['tmp_name'] stocke l'emplacement temporaire du fichier chargé
    // $_FILES['picture']['name']) stocke le nom initial du fichier
    if(move_uploaded_file(
        $_FILES['picture']['tmp_name'],
        'images/'.$_FILES['picture']['name'])
    ) {// déplacement ok du point A vers le point B
        echo 'Chargement du fichier ok';
    } else {
        echo 'Chargment du fichier ko';
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="text" name="firstname">
        <input type="text" name="lastname">
        <input type="file" name="picture">
        <input type="color" name="color">
        <input type="submit" value="Valider">
    </form>
</body>
</html>
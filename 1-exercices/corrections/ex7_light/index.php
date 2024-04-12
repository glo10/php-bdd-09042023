<?php

var_dump($_POST, $_FILES);
/**
 * @param array $data 
 * @param string $uniquePrefix 
 * @return bool
 */
/**
 * Upload d'une image
 * PS : on peut être plus précis en renvoyant une erreur selon un scénario spécifique (trop lourd ou mauvaise extension)
 *
 * @param array $data info sur le fichier
 * @param string $uniquePrefix prefix à ajouter au nom originel du fichier chargé par l'utilisateur
 * @param integer $maxSize taille max du fichier à ne pas dépasser
 * @param string $defaultDir dossier de stockage des images
 * @return boolean
 */
function downloadImg(array $data, string $uniquePrefix, int $maxSize = 2000000, $defaultDir = 'upload') : bool
{
    $pic = $data['tmp_name'];
    $filename = $uniquePrefix.$data['name'];// Concaténation du prefix avec le nom originel du fichier
    // si $file['tmp_name'] existe alors $tmp vaudra sa valeur sinon $tmp vaut null
    $tmp = $pic ?? null; // idem que $tmp = isset($pic)?$pic:null
    if($tmp === null) {// pas de fichier temporaire stocké dans un dossier temporaire du serveur
        return false;
    }

    // Récupération de l'extension du fichier déposé
    $extension = pathinfo($data['name'], PATHINFO_EXTENSION);
    /**
     * Fonction preg_match pour vérifier une expression régulière (permet de vérifier que la donnée respecte bien un motif qu'on a défini)
     * Fonction in_array vérifie qu'une valeur est présente dans un tableau en retournant true ou false
     * Fonction move_uploaded_file déplace un fichier d'un emplacement à un autre
     * Il faut bien créer le dossier upload au préalable et idéalement il faudrait vérifier dans le code que ce dossier existe
     */
    
    // vérification de 4 conditions (bonne extension + bon type de contenu + bonne taille + déplacement effectué correctement)
    return (preg_match('@jpeg|jpg|png@i', $extension) === 1) && 
    in_array($data['type'], ['image/jpeg', 'image/jpg','image/png', 'image/gif']) &&
    $data['size'] <= $maxSize &&
    move_uploaded_file($data['tmp_name'], $defaultDir.'/'.$filename);
}

if(isset($_FILES['picture'])) {// appel de la fonction downloadImg uniquement la clé existe = uniquement lors de la soumission du formulaire
    echo downloadImg($_FILES['picture'], uniqid('img_')) ?'Chargement du fichier ok':'Chargment du fichier ko';
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
    <!-- Attention attribut enctype="multipart/form-data" obligatoire sinon impossible de récupérer les infos sur les fichiers côté Back -->
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="picture">
        <input type="submit" value="Valider">
    </form>
</body>
</html>
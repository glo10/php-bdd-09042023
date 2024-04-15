<?php
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
function downloadImg(array $data, string $uniquePrefix, int $maxSize = 2000000, $defaultDir = 'upload'): bool
{
  $pic = $data['tmp_name'];
  $filename = $uniquePrefix . $data['name']; // Concaténation du prefix avec le nom originel du fichier
  // si $file['tmp_name'] existe alors $tmp vaudra sa valeur sinon $tmp vaut null
  $tmp = $pic ?? null; // idem que $tmp = isset($pic)?$pic:null, isset permet de vérifier si la variable est déclarée (existe)
  if ($tmp === null) { // pas de fichier temporaire stocké dans un dossier temporaire du serveur
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
  return (preg_match('@jpeg|jpg|png|gif@i', $extension) === 1) &&
    in_array($data['type'], ['image/jpeg', 'image/jpg', 'image/png', 'image/gif']) &&
    $data['size'] <= $maxSize &&
    move_uploaded_file($data['tmp_name'], $defaultDir . '/' . $filename);
}

function downloadImgWithError(array $data, string $uniquePrefix, int $maxSize = 2000000, $defaultDir = 'upload'): string
{
  $pic = $data['tmp_name'];
  $filename = $uniquePrefix . $data['name'];
  $tmp = $pic ?? null;
  if ($tmp === null) return 'Aucune image a été chargée';
  $extension = pathinfo($data['name'], PATHINFO_EXTENSION);
  if ((preg_match('@jpeg|jpg|png@i', $extension) !== 1) || !in_array($data['type'], ['image/jpeg', 'image/jpg', 'image/png', 'image/gif'])
  ) return 'Mauvaise extension, jpeg, jpg et png sont autorisées';
  if ($data['size'] > $maxSize) return 'trop lourd';
  if (move_uploaded_file($data['tmp_name'], $defaultDir . '/' . $filename)) return 'Chargement ok';
  return 'Désolé, il y a eu un souci'; // on verra plus tard comment gérer les exceptions (erreur exceptionnelle)
}

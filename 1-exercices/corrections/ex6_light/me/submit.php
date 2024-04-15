<?php

// var_dump($_POST);

/**
 * Show table td for each input
 *
 * @return void signifie que la fonction ne retourne pas résultat qui peut être stocké dans une variable
 */
function show() : void {
  foreach($_POST as $key => $value) {
    echo '<td>';
    /**
     * On peut optimiser la condition en regardant si $value est un tableau
     * au lieu de vérifier les name du tableau qui sont plus instable
     * if(is_array($value)) à la place de la condition actuelle
     */
    if($key === 'interests' || $key === 'languages') {
      foreach($value as $k => $option) {
        // on peut optimiser pour enlever la dernière virgule, je vous laisse réfléchir plusieurs solutions sont possibles
        echo htmlspecialchars($option).', ';
      }
    } elseif ($key === 'age') {
      echo $value >= 18 ? 'Vous êtes majeur' : 'Vous êtes mineur';
    }else {
      echo htmlentities($value);
    }
    echo '</td>';
  }
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Affichage</title>
</head>
<body>
  <h1 class="text-center m-5">Affichage des informations</h1>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Age</th>
        <th>Commentaires</th>
        <th>Langues parlées</th>
        <th>Langage de programmation préféré</th>
        <th>Centre d'intérêts</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <?php show(); ?>
      </tr>
    </tbody>
  </table>
</body>
</html>
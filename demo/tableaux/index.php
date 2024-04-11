<?php
// Créez une fonction qui génère aléotoirement X valeurs
// comprisent entre Y et Z

// Phase de définition ou déclaration de la fonction
/**
 * Générer un tableau de plusieurs nombres comprises entre min et max
 *
 * @param integer $totalValues nombre total
 * @param integer $min minimum
 * @param integer $max maximum
 * @return array
 */
function randomNumbers(int $totalValues, int $min, int $max) : array {
    // tableau vide
    $numbers = array(); // idem que $numbers = [];
    // on boucle pour générer X valeurs
    for($i = 0;$i < $totalValues;$i++) {
        $numbers[] = rand($min, $max);
    }
    // valeur de retour
    return $numbers;
}

// Phase d'exécution ou d'appel de la fonction
// for($i = 0; $i < 3; $i++) {
//     $result = randomNumbers(10, 1, 10);
//     var_dump($result);
// }

$tableNumbers = randomNumbers(15, 10, 100);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableaux nombres aléatoires</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <table class="table table-bordered">
        <tbody>
            <?php
            foreach($tableNumbers as $key => $value) {
                echo '<tr>';
                echo '<td>'.$key.'</td>';
                echo "<td>$value</td>";
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
    
</body>
</html>



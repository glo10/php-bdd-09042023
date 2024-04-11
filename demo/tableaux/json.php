<?php
/**
 * Générer un tableau de plusieurs nombres comprises entre min et max
 *
 * @param integer $totalValues nombre total
 * @param integer $min minimum
 * @param integer $max maximum
 * @return array
 */
function randomNumbers(int $totalValues = 15, int $min = 1, int $max = 50) : array {
    // tableau vide
    $numbers = array(); // idem que $numbers = [];
    // on boucle pour générer X valeurs
    for($i = 0;$i < $totalValues;$i++) {
        $numbers[] = rand($min, $max);
    }
    // valeur de retour
    return $numbers;
}

$tableNumbers = randomNumbers(); //
// spécifie qu'on retourne du JSON au navigateur (client)
header("Content-type: application/json; charset=utf-8");
// Transformation du tableau $tableNumbers en json
$tableJson = json_encode($tableNumbers);
echo $tableJson;



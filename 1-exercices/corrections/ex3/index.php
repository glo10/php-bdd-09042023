<?php
// Question 1
$results = [];
$table = 5;
$max = 12;
for ($i = 1; $i <= 12; $i++) {
  $result = $table * $i;
  // concaténation et interpolation(récupération des valeurs des variables) grâce aux guillements doubles
  $results[$i] = "$table * $i = $result";
}
var_dump($results);

// Question 2
for($i = 1; $i <= 5;$i++) {
  for($j = 0; $j < $i; $j++) {
    echo $i;
  }
}
// Question 3
$countries = array(
  'France' => 67595000,
  'Suede' => 9998000,
  'Suisse' => 8417000,
  'Kosovo' => 1820631,
  'Malte' => 434403,
  'Mexique' => 122273500,
  'Allemagne' => 82800000
);

$total = 0;
foreach ($countries as $country => $population) {
  $total += $population;
}
echo '<br>Nombre de pays : ' . count($countries) . '<br>';
echo 'Nombre d\'habitants : ' . $total;

$keys = array_keys($countries);
var_dump($keys);
$totalPop = 0;
for($i = 0; $i < count($keys); $i++) {
  $index = $keys[$i]; // cherche la clé correspondant aux noms des pays depuis le tableau des clés
  $pop = $countries[$index]; // récupére la population à partir de cette clé depuis le tableau d'origine
  $totalPop += $pop; 
  // idem que de faire directement $countries[$keys[$i]] mais moins lisible
  // $totalPop += $countries[$keys[$i]];
}
echo 'Population avec for '.$totalPop;
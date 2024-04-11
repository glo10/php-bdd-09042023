<?php
// Question 1
/**
 * Multiply tables
 *
 * @param integer $max max multiplier
 * @param integer $endTable max multiplicand
 * @param integer $startTable min multiplicand
 * @return array multidimensional array with each operation
 */
function multiply(int $max = 10, int $endTable = 12, int $startTable = 1) : array {
  $results = [];
  for($i = $startTable; $i <= $endTable; $i++) {
    for ($j = 1; $j <= $max; $j++) {
      $result = $i * $j; 
      $results[$j][$i] = "$j * $i = $result";
    }
  }
  return $results;
}
// Question 2
/**
 * Transform array 2 dimension to 1 dimension
 *
 * @param array $tables
 * @return array
 */
function fromTwoToOne(array $tables) : array {
  $results = [];
  foreach($tables as $tab) {
    foreach($tab as $v) {
      $results[] = $v;
    }
  }
  return $results;
}
$tabs = multiply();
var_dump($tabs, fromTwoToOne($tabs));

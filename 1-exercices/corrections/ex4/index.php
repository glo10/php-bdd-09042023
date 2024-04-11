<?php
// Question 1 factorisation dans des fonctions des programmes des exercices 1 à 3

/**
 * sum of numbers
 *
 * @param array ...$numbers all arguments
 * @return float|int
 * @see avant le spread operator ... il fallait utiliser la fonction suivante func_get_args https://www.php.net/manual/en/function.func-get-args.php
 */
function add(...$numbers) {
  $sum = 0;
  foreach ($numbers as $nb) {
    $sum += $nb; // operateur combiné
  }
  return $sum;
}

/**
 * Substraction
 *
 * @param array ...$numbers all arguments
 * @return int|float
 */
function minus(...$numbers) {
  $m = $numbers[0];
  for($i = 1; $i < count($numbers); $i++) {
    $m -= $numbers[$i]; // operateur combiné
  }
  return $m;
}

/**
 * Multiply
 *
 * @param array ...$numbers all arguments
 * @return int|float
 */
function multiply(...$numbers) {
  $m = 1;
  foreach ($numbers as $nb) {
    $m *= $nb;
  }
  return $m;
}

/**
 * division
 *
 * @param integer|float $nb1
 * @param integer|float $nb2
 * @return int|float|string
 */
function divide (int|float $nb1, int|float $nb2) : mixed {
  if($nb2 != 0) return $nb1 / $nb2;
  else return 'Division par 0 impossible ';
}

/**
 * modulo
 *
 * @param integer|float $nb1
 * @param integer|float $nb2
 * @return integer|float
 */
function modulo(int|float $nb1, int|float $nb2) {
  return $nb1 % $nb2;
}

/**
 * Return generation
 *
 * @param integer $age age
 * @return string
 */
function getGeneration(int $age) : string {
  if($age <= 10) {
    return 'Enfant';
  } else if($age > 10 && $age < 18) {
    return 'Adolescent';
  } else if ($age < 50) {
    return 'Majeur';
  } else {
    return 'Senior';
  }
}

// Question 2

/**
 * Fibonacci sequence
 *
 * @param integer|null $max
 * @return array
 */
function fibonacci(?int $max = 89): array
{
  // exercice à faire : générer le début du tableau 1 et 2 dans la boucle en modifiant le corps de cette fonction
  $values = [1, 2];
  $next = 1;
  for ($i = 0; $next < $max; $i++) {
    $next = $values[$i] + $values[$i + 1];
    if ($next <= $max) {
      $values[] = $next;
    }
  }
  return $values;
}

// Question 3
/**
 * Find value from array
 *
 * @param mixed $keySearch index
 * @param array $data data
 * @return string|null
 */
function findValue(mixed $keySearch, array $data) : ?string {
  foreach($data as $key => $value) {
    if($key === $keySearch) {
      return $value;
    }
  }
  return null;
}

function findValueWithBreak(mixed $keySearch, array $data) : ?string {
  $result = null;
  foreach($data as $key => $value) {
    if($key === $keySearch) {
      $result = $value;
      break;
    }
  }
  return $result;
}

// Exécution
var_dump(add(1, 2, 3, 4, 5, 6, 7));
var_dump(minus(100, 20, 50));
var_dump(multiply(1, 2, 3, 4, 5));
var_dump(fibonacci());
$user = [
  'firstname' => 'john',
  'lastname' => 'doe',
  'email' => 'john@doe.com',
  'birthday' => '01/01/1970',
  'city' => 'London',
  'country' => 'UK',
];
var_dump(findValue('birthday', $user));
var_dump(findValue('name', $user));
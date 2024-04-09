# Exercice 4 : fonctions

1. Factorisez tous vos travaux des exercices 1 à 3 dans des fonctions (lorsque c'est possible).
2. Créez une fonction qui permet de réaliser la [suite de Fibonacci](https://fr.wikipedia.org/wiki/Suite_de_Fibonacci) : `1, 2, 3, 5, 8, 13, 21, 34, 55, 89, etc`. Retournez les valeurs précédentes sous la forme d'un tableau numérique.
3. A partir d'un tableau associatif, créez une fonction qui prend un paramètre, un indice (clé) et un tableau et retourne la valeur associée à cette clé.
Par exemple :
`<?php
  $persons = array('major' => true, 'age' => 36, 'name' => 'fatou');
  $vFatou = myFn("age", $persons); // 36
  $vNull = myFn('address', $persons); // null`
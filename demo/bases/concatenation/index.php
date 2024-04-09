<?php

// concaténation (des strings bout à bout)

$name = 'John';
$age = 45;

// Phrase qui contient name et age donc concaténation de name et age
// Concatenation avec l'opérateur .
$nameAndAge =  'My name is '.$name. ', i\'m '.$age. ' years old<br>';
echo $nameAndAge;
// Methodologie

// 1. Ecrire ce qu'on veut obtenir à la fin sans les points
// 2. Ajoutez les points

echo $name.' a '.$age.' ans<br>';

// Différence entre guillemets simples et doubles

// Double interprete et concatène tout directement

echo "$name a $age ans ! avec les doubles quotes";
echo "utilisation des guillemets \"\"";
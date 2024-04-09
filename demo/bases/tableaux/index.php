<?php

// Tableau indexé
// déclaration tableau avec []
$glodie = [
    'Glodie',
    'Tshimini',
    32,
    75014,
    'Paris',
    'France',
    true,
    1.69
];

// déclaration tableau avec la fonction array()
$maria = array(
    'Maria',
    'Doe',
    42,
    75004,
    'Paris',
    'France',
    false,
    1.89
);

// affichage de l'age

echo $glodie[2];

// tableaux associatifs (clés sont des string au lieu des int)
// Pour les clés la convention de nommage est le snake_case ou camelCase
// => opérateur d'affection
$maria = array(
    'firstname' => 'Maria',
    'lastname' => 'Doe',
    'age' => 42,
    'postal_code' => 75004,
    'city' => 'Paris',
    'country' => 'France',
    'is_man' => false,
    'size' => 1.89
);

// Affichage code postal de maria

echo $maria['postal_code'];// au lieu d'un chiffre on met directement la clé concernée entre [] + guillemets
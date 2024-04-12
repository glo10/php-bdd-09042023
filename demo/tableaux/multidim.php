<?php

// Rappels
// un tableau à une dimension (une structure qui contient des valeurs simples int, bool, string, float)
$john = array(
    'name' => 'john',
    'city' => 'Londres',
    'country' => 'UK',
    'isRich' => true,
    'size' => 1.85
);
// Tableaux à N dimensions (N un nombre strictement supérieur à 1)
// A partir du moment ou on stocke dans un tableau d'autres tableaux = tableaux multidimensionnels
// $persons au rang ou l'indice 0 contient le tableau avec john, au rang 1 Céline, etc.
$persons = [
    array(// 0 => array()
        'name' => 'john',
        'city' => 'Londres',
        'country' => 'UK',
        'isRich' => false,
        'size' => 1.85
    ),
    array(
        'name' => 'Céline',
        'city' => 'Manchester',
        'country' => 'UK',
        'isRich' => true,
        'size' => 1.95
    ),
];

// Afficher le prénom John
$johnData = $persons[0]; // tableau avec toutes les infos de John
echo 'Dans un tableau à une dim pour John '.$johnData['name'].'<br>';
// Afficher la ville de Céline
echo 'Dans un tableau à une dim pour Céline '.$persons[1]['city'].'<br>';// Manchester
echo 'Affichage tableau à 2 dim <br>';
foreach($persons as $keyInfoPerson => $person) { // ici $person est un tableau
    foreach($person as $key => $value) {
        if($key === 'isRich') {
            $isRich = $value === true ? ' riche' : 'pauvre';
            echo 'Vous êtes '.$isRich.'<br>';
        } else {
            echo $key.' : '.$value.'<br>';// clé : valeur
        }
    }
}
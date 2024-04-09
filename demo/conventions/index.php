<?php
// Règles de base pas de caractère spéciaux et ne pas commencer par un chiffre

// Convention camelCase : 1er lettre en miniscule et 1er de chaque nouveau mot en Majuscule
$cityParis = 'Paris';
$firstName = 'Glodie';
$m2iFormation = 'M2i';

// Convention PascalCase : du camelCase mais avec la première lettre en majuscule
$CityLyon = 'Lyon';
// (PHP est sensible à la casse)$cityParis et $CityParis sont 2 variables distinctes 
$CityParis = 'Paris';

// Convention UPPERCASE et UPPER_SNAKE_CASE : Tous en maj et séparation des mots par des _
define('COUNTRY', 'France');
define('CONTINENT_EUROPE', 'Europe');
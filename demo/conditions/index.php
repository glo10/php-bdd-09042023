<?php

// Vérifier l'age avec un if..elseif sans accolades (accolade optionnel lorsqu'il y a une seule instruction)
$age = 15;
$country = 'France';
$city = 'Paris';
if($age >=10 && $age < 18) echo 'Ado';
else if($age >= 18 && $age < 45) echo 'Adulte';
else echo 'Senior ou enfant';

// switch classique
$sexe = 'M';
switch($sexe) {
    case 'M':
        echo 'M';
    break;
    case 'F':
        echo 'F';
    break;
    default:
        echo 'Cas par défaut, optionnel';
    break;
}
// switch avec les conditions à l'intérieur
switch(true) {
    case $age >=10 && $age < 18 : echo 'Ado';
    break;
    case ($age >= 18 && $age < 45) || ($city === 'Paris') || ($country === 'France') : echo 'Adulte qui réside à Paris';
    break;
}

// ternaire notation raccourci d'un if/else
$hour = 15;
echo $hour >= 12 ? 'Aprem' : 'Avant midi';

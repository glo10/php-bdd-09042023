<?php

// echo 'Avant la boucle for<br>';
$tabNb = array(10,25,358,48,2);
// parcourir un tableau avec un nombre connu d'éléments ici 5
// la fonction count() retourne le nombre d'éléments de notre tableau
// count() est similaire à .length en JS
for($i = 0;$i < count($tabNb);$i++){
    echo 'Nombre '.$tabNb[$i].'<br>';
}
echo 'Après la boucle for<br>';
echo 'Avant la boucle for et la décrémentation <br>';
// Avec la décrémentation et donc parcours de la fin vers le début
// $i-- ie $i = $i -1
for($i = (count($tabNb) - 1);$i >= 0;$i--) {
    // 1er tour i = 4 4>0 => true : au rang 4, valeur 2
    // 2e tour tour i = 3 3>0 => true : au rang 3, valeur 48
    // 3e tour i=2 2>0 => true : au rang 2, valeur 358
    // 4e tour i=1 1>0 => true : au rang 1, valeur 25
    // 5e tour i=0 0>=0 => true : au rang 0, valeur 10
    // 6e tour i=-1 -1>=0 => false, on quitte la boucle
    echo $tabNb[$i]. '<br>';
}
echo 'Fin de la boucle for et la décrémentation <br>';

// break on quitte complétement la boucle
for($i = 0;$i < count($tabNb);$i++){
    if($i == 1) break;
    echo 'Nombre '.$tabNb[$i].'<br>';
}
// continue on saute le tour de l'élément en cours (actuel)
for($i = 0;$i < count($tabNb);$i++){
    if($i == 1) break;
    echo 'Nombre '.$tabNb[$i].'<br>';
}
// cas des boucles infinis

// cas N° 1
// for($i = 0;;$i++){
//     echo 'Nombre '.$tabNb[$i].'<br>';
// }
// cas N° 2
// for($i = 0;$i < count($tabNb);){
//     echo 'Nombre '.$tabNb[$i].'<br>';
// }
<?php
var_dump($_POST);
 
function selectArena($arena) {
    switch ($arena) {
        case 'castleRyu' :
            return 'Château de Ryu';
            break;
        case 'dojo' :
            return 'Dojo de Ken';
            break;
        case 'castleKing' :
            return 'Château de King';
            break;
        case 'ice' :
            return 'Banquise de Papa Pingouin';
            break;
        case 'moleHole' :
            return 'the Mole Hole';
            break;  
        default :
            return 'Non identifié';
            break;
    }
}
 
function selectFighter($fighter) {
    switch ($fighter) {
        case 'Ryu' :
            return 'Ryu, le grand maître du karaté';
            break;
        case 'Ken' :
            return 'Ken, le faire-valoir de Ryu';
            break;
        case 'King' :
            return 'King le Maudit fighter cheaté';
            break;
        case 'PapaPingouin' :
            return 'le papa Pingouin, le papa Pingouin, le papa, le papa, le papa Pingouin';
            break;
        case 'ReneLaTaupe' :
            return 'l\'insupportable René la Taupe';
            break;  
        default :
            return 'Non identifié';
            break;
    }
}
 
$arena = selectArena($_POST['arena']);
$fighter = selectFighter($_POST['fighter']);
 
echo(
'<h1>Chargement de votre fritage...</h1>
 
<h2>Rappel des faits :</h2>
 
<ul>
    <li>'.$_POST['pseudo'].' combat avec : '.$fighter.'</li>
    <li>Arène sélectionnée : '.$arena.'</li>
    <li>Handicap : ');
 
    if (isset($_POST["handicap"]) && $_POST["handicap"] == 'true') {
        echo 'oui';
    } else {
        echo 'non';
    }
    if (isset($_POST["pleasure"]) && $_POST["pleasure"] == 'true') {
        echo '<li>Combat pour le plaisir</li>';
    } else {
        echo '<li>Combat pour de vrai</li>';
    }
echo '</li></ul>';
 
?>
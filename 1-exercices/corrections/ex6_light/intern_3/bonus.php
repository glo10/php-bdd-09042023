<!-- // 2. Récupérez les informations envoyées depuis le formulaire et affichez-les sur PHP sous forme de liste <ul> ou <ol> ou tableaux <table> HTML. -->

<!-- // Bonus
// 1. Protégez vos données contre les insertions de code via les fonctions htmlspecialchars ou htmlentities
// 2. Selon l'age de l'utilisateur, affichez s'il est mineur ou majeur (si vous n'avez pas de champ age, ajoutez-le svp) -->

<?php
var_dump($_POST);
echo '<ul><li>' . 'Bonjour ' . htmlentities($_POST['prenom']) . ' ' . htmlentities($_POST['nom']);
if( (isset($_POST['age']) ) && (!empty( $_POST['age'])) ){
    echo ' vous avez  '.$_POST['age'].' ans';
}
if($_POST['age']<18 && $_POST['age']>-1){
    echo' vous etes donc mineur';
}

else if($_POST['age']>17){
    echo' vous etes donc majeur';
}

else if($_POST['age']<0){
    echo' vous etes donc très con';
}

echo '<li>Vous avez choisi la ou les option(s) : ';
foreach ($_POST['multipleSelect'] as $option) {
    echo $option .', '. '</li>';
};
echo '<li>Avez vous coché la case ? Réponse c\'est : ';
if(isset($_POST['checkbox1'])){
    echo 'vrai';
}
else {
    echo'faux';
};'</li></ul>';

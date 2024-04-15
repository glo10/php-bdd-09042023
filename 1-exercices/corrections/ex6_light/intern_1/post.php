<style>
    body {
         background: #e0ecf7;
    }
 
    h1 {
    color: #852c2cd6;
    }
    p {
    font-size: larger;
    color: #a99479;
    }
 
</style>
 
<?php
echo '<h1> Bonjour '.$_POST['name'].'</h1>';
echo '<p> Tu es bien née en  '.$_POST['annee'].'</p>';
echo '<p> Ton laguage prefere est le  '.$_POST['fav_language'].'  hmmm je vois jai pas trop l impression que tu ai vraiment choisi hahahahhaa</p>';
echo '<p> Tu es dans la tranche des  '.$_POST['age'].' ans </p>';
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chose your fighter</title>
</head>
<body>
    <h1>Veuillez vous soumettre au formulaire.</h1>
 
    <form method="post" action="letsfight.php">
 
        <!-- PSEUDO -->
        <label for="pseudo">Votre pseudo :</label>
        <input type="text" name="pseudo" placeholder="Nîmes">
        <br>
 
        <!-- FIGHTER -->
        <label for="fighter">Chose your fighter :</label>
        <input type="radio" name="fighter" id="ryu" value="Ryu">Ryu</input>
        <input type="radio" name="fighter" id="ken" value="Ken">Ken</input>
        <input type="radio" name="fighter" id="king" value="King">King le Maudit</input>
        <input type="radio" name="fighter" id="papaPingouin" value="PapaPingouin">Papa Pingouin</input>
        <input type="radio" name="fighter" id="reneLaTaupe" value="ReneLaTAupe">René la Taupe</input>
        <br>
 
        <!-- OPTIONS DE COMBAT -->
        <input type="checkbox" name="handicap" value="true"><label for="handicap">Handicap</label>
        <input type="checkbox" name="pleasure" value="true"><label for="pleasure">Combattre pour le plaisir</label>
        <br>
 
        <!-- ARÈNE -->
        <label for="arena">Choisissez votre arène :</label>
        <select name="arena" id="arena">
            <option value="castleRyu">Château de Ryu</option>
            <option value="dojo">Dojo de Ken</option>
            <option value="castleKing">Château de King</option>
            <option value="ice">Banquise</option>
            <option value="moleHole">The Mole Hole</option>
          </select>
 
        <!-- SUBMIT -->
        <input type="submit" value="On se frite !!">
    </form>
</body>
</html>
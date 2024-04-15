<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ex6lite</title>
<style>
    form {
        width: 28%;
        height: 100%;
        background: #ccc;
        border: solid 2px #ccc;
        border-radius: 2%;
    }
 
    div {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        position: relative;
    }
 
    body {
        width: 99%;
        height: 935px;
        position: relative;
    }
</style>
 
<head>
 
<body>
    <div>
        <form action="ex6lite.php" method="post">
            <input type="text" name="name" placeholder="Nom">
            <input type="number" name="annee" placeholder="Année naissance">
            <p>Selection ton language prefere (ta pas le choix ^^):</p>
            <input type="radio" id="php" name="fav_language" value="php">
            <label for="PHP">PHP</label>
 
            <br>
 
            <p>Dans quelle tranche tu te situe </p>
            <input type="radio" id="age1" name="age" value="0-30">
            <label for="age1">0 - 30</label><br>
            <input type="radio" id="age2" name="age" value="0-60">
            <label for="age2">31 - 60</label><br>
            <br>
            <p>select</p>
            <select name="" id="">
                <option value="burger">burger</option>
                <option value="">tomate</option>
                <option value="">pain</option>
            </select>
            <input type="submit" value="Abonne toi">
            </form>
 
 
    </div>
 
 
</body>
</head>
 
</html>
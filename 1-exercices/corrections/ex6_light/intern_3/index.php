<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Formulaire Questionnaire</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 20px;
        }
        form {
            max-width: 600px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h1 {
            font-size: 24px;
            color: #333;
            text-align: center;
            padding-bottom: 20px;
        }
        label {
            font-size: 16px;
            color: #333;
            margin-bottom: 5px;
            display: block;
        }
        input[type="text"], select, textarea {
            width: calc(100% - 20px);
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="radio"], input[type="checkbox"] {
            margin-right: 10px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #5c67f2;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            text-transform: uppercase;
        }
        button:hover {
            background-color: #4a54e1;
        }
        ul {
            background: #fff;
            list-style: none;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        li {
            padding: 10px;
            border-bottom: 1px solid #eee;
        }
        li:last-child {
            border-bottom: none;
        }
    </style>
</head>

<body>
    <h1>Questionnaire</h1>
    <form action="" method="post">
        <label for="name">Nom :</label>
        <input type="text" id="name" name="name" required>

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required>

        <label>Genre :</label>
        <input type="radio" id="male" name="gender" value="bonhomme">
        <label for="male" style="display: inline;">Homme</label>
        <input type="radio" id="female" name="gender" value="femme">
        <label for="female" style="display: inline;">Femme</label><br><br>

        <label>Votre âge :</label>
        <input name="age" id="age" type="number" /></p>



        <label>Intérêts :</label>
        <input type="checkbox" id="coding" name="interests[]" value="codage">
        <label for="codage" style="display: inline;">Codage</label>
        <input type="checkbox" id="music" name="interests[]" value="musique">
        <label for="musique" style="display: inline;">Musique</label>
        <input type="checkbox" id="cinema" name="interests[]" value="cinema">
        <label for="cinema" style="display: inline;">Cinema</label>
        <input type="checkbox" id="dance" name="interests[]" value="dance">
        <label for="dance" style="display: inline;">Danse</label>
        <input type="checkbox" id="jeuxvideos" name="interests[]" value="jeuxvideos">
        <label for="jeux videos" style="display: inline;">Jeux vidéos</label><br><br>

        <label for="country">Pays :</label>
        <select id="country" name="country">
            <option value="France">France</option>
            <option value="Belgique">Belgique</option>
            <option value="Canada">Canada</option>
        </select>

        <button type="submit">Envoyer</button>
    </form>
</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h1>Informations Données</h1>";
    echo "<ul>";
    echo "<li>Nom: " . htmlspecialchars($_POST['name']) . "</li>";
    echo "<li>Prénom: " . htmlspecialchars($_POST['prenom']) . "</li>";
    echo "<li>Age ". htmlspecialchars($_POST['age']) ."</li>";

    if ($_POST['age'] < 18)
        echo "Tu es trop jeune.";

    if ($_POST['age'] >= 18 && $_POST['age'] < 65)
        echo "Tu as l'âge idéal.";

    if ($_POST['age'] >= 65)
        echo "Profite de la retraite.";

    echo "<li>Genre: " . (isset($_POST['gender']) ? htmlspecialchars($_POST['gender']) : "Non spécifié") . "</li>";


    if (isset($_POST['interests'])) {
        echo "<li>Intérêts: " . implode(", ", array_map('htmlspecialchars', $_POST['interests'])) . "</li>";
    } else {
        echo "<li>Intérêts: Aucun sélectionné</li>";
    }

    echo "<li>Pays: " . htmlspecialchars($_POST['country']) . "</li>";
    echo "</ul>";
}
?>
</body>

</html>
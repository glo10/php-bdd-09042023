<?php
  /**
   * Inclusion du fichier qui contient la variable $countries qui sera utilisée ci-après
   * Pour afficher les pays
   * $countries est un tableau à 2 dimensions dont chaque possède un id et un name
   */ 
  require_once dirname(__DIR__).'/back/countries.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/home.css">
  <title>Inscription</title>
</head>
<body>
  <main class="container">
    <h1>Inscription</h1>
    <form autocomplete="off" action="../back/submit_sign_up.php" method="POST">
    <div class="my-3">
      <p class="form-help"></p>
      <input
        type="text"
        class="form-control"
        name="lastname"
        placeholder="Nom"
        data-format="Au moins 2 caractères, aucun chiffre"
      >
    </div>
    <div class="my-3">
      <p class="form-help"></p>
      <input
        type="text"
        class="form-control"
        name="firstname"
        placeholder="Prénom"
        data-format="Au moins 2 caractères, aucun chiffre"
      >
    </div>
    <div class="my-3">
      <p class="form-help"></p>
      <input
        type="email"
        class="form-control"
        name="email"
        placeholder="email"
        data-format="Exemple contact@tshimini.fr, extension maximum 10 caractères"
      >
    </div>
    <div class="my-3">
      <p class="form-help"></p>
      <input
        type="password"
        class="form-control"
        name="pwd"
        placeholder="Mot de passe"
        data-format="Entre 15 et 36 caractères (miniscule, majuscule, chiffres et caractères spéciaux &amp; $ + - * / # ~ € % ^ ! - _`)"
      >
    </div>
    <div class="my-3">
      <p class="form-help"></p>
      <input
        type="number"
        class="form-control"
        name="age"
        placeholder="Age"
        data-format="Age compris entre 14 et 130 ans"
      >
    </div>
    <div class="my-3">
      <p class="form-help"></p>
      <select
        class="form-control"
        name="country"
      >
      <option value="-1" disabled selected>Séléctionnez un pays</option>
      <?php foreach($countries as $country) :?>
        <option value="<?= $country['id']; ?>"><?= $country['name']; ?></option>
      <?php endforeach; ?>
      </select>
    </div>
    <div class="my-3">
      <p class="form-help"></p>
      <select
        class="form-control"
        name="city"
      >
        <option value="-1" disabled selected>Sélectionnez une ville</option>
      </select>
    </div>
    <div class="my-3 align-right">
      <input
        type="submit"
        value="Valider"
        class="btn btn-success me-5"
        data-endpoint="signup"
      >
      <a href="index.php" class="btn btn-info">Connexion</a>
    </div>
  </form>
</main>
<script src="js/index.js"></script>
</body>
</html>
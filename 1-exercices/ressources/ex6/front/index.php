<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/home.css">
  <title>Connexion</title>
</head>
<body>
  <main class="container">
    <h1>Connexion</h1>
    <form autocomplete="off" method="" action="../back/submit_sign_in.php">
      <div class="my-3">
        <p class="form-help"></p>
        <input
          type="email"
          class="form-control"
          name="email"
          placeholder="email"
        >
      </div>
      <div class="my-3">
        <p class="form-help"></p>
        <input
          type="password"
          class="form-control"
          name="pwd"
          placeholder="mot de passe"
        >
      </div>
      <div class="my-3 align-right">
        <input type="submit" value="Valider" class="btn btn-success me-5" data-endpoint="signin">
        <a href="sign_up.php" class="btn btn-info">Inscription</a>
      </div>
    </form>
  </main>
</body>
</html>
<?php
// import des constantes de la base de données
require_once ('config/parameters.php'); 
// 1. Connection
$pdo = new PDO(
  'mysql:host='.DB_HOST.';port='.DB_PORT.';dbname='.DB_NAME,
  DB_USER_NAME,
  DB_PASSWORD
);
// 2. Requête pour récupérer tous les utilisateurs
$sql = 'SELECT * FROM user WHERE id='.$_GET['id'];
// 3. Exécution sans utliser la requête préparée avec la méthode prepare de PDO
$stmt = $pdo->query($sql);
if($stmt) {
  // $stmt
  // 4. Récupérer et traiter les résultats de ma requête SQL
  $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
  foreach($rows as $row => $user) {
    echo '<ul>';
    foreach($user as $nameOfColumn => $value) {
      echo '<li>'.$nameOfColumn. ' : '.$value.'</li>';
    }
    echo '</ul>';
  }
}
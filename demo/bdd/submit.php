<?php
var_dump($_POST);
// new permet de créer une nouvelle instance de la classe PDO
// 1. connection à la base de données via PDO
$dsn = 'mysql:host=localhost;port=3308;dbname=demo_bdd';
$pdo = new PDO($dsn, 'root', '');
// 2. Requête préparée à la base de données pour éviter les injections SQL
$sql = 'INSERT INTO
user(
  lastname,
  firstname,
  age,
  comment,
  language_speak,
  favorite_language_program,
  hobbies
) VALUES(
  :lastname,
  :firstname,
  :age,
  :comment,
  :language_speak,
  :favorite_language_program,
  :hobbies
)';
$values = [
  ":lastname" => $_POST['lastname'],
  ":firstname" => $_POST['firstname'],
  ":age" => $_POST['age'],
  ":comment" => $_POST['comment'],
  ":language_speak" => $_POST['languages'][0],
  ":favorite_language_program" => $_POST['lang_fav_program'],
  ":hobbies" => $_POST['interests'][0]
];
/**
 * @var $pdoStatement est un objet de type PDOStatement 
 */
$pdoStatement = $pdo->prepare($sql);
if($pdoStatement) {// s'assurer que la requête a bien été préparée
  // 3. Exécution de la requête
  if($pdoStatement->execute($values)) {
    echo 'Enregistrement ok';
  } else {
    echo 'Problemo';
  }
}
// 4. Exploitez les résultats de la requête utile surtout les select
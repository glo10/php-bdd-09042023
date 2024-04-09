# Exercice 8 : gestion d'une base de données

## Ressources

- **Les requêtes de création de la base de données et des tables se trouvent dans le fichier app/back/data/database.sql**
- [Fonction *password_hash()* pour hacher les mots de passe](https://www.php.net/manual/fr/function.password-hash)
- [Fonction *password_verify()* pour vérifier que 2 mots de passe (un haché et l'autre non) sont identiques](https://www.php.net/manual/fr/function.password-verify.php)

## Requêtes SQL pour insérer un utilisateur

- `INSERT INTO user(lastname, firstname, email, pwd, age, city) VALUES (:lastname, :firstname, :email, :pwd, :age, :city)`

---

## Enoncé

1. Créez la base de données et les tables à partir du fichier `app/back/data/database.sql` à exécuter depuis *PHPMYADMIN*.
PS : il faut créer une base de données au préalable et ensuite soit exécuter le contenu du script dans l'éditeur SQL de *PHPMYADMIN* ou importer le fichier toujours depuis *PHPMYADMIN*. 
2. Insérez les utilisateurs dans la base de données en hachant les mots de passe.
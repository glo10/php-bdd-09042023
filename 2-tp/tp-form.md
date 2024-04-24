# TP binôme formulaire

---

## Préambule

- [Téléchargez et regardez la vidéo du travail attendu](./ressources/tp_form.mp4)

---

## Ressources

- [Pages HTML/CSS/JS/PHP à récupérer ici](./ressources/tp_form.zip)
- [Documentation d'aide à la vérification des données sans les expressions régulières](https://www.php.net/manual/fr/function.filter-var.php)
- [Apprendre les expressions régulières](https://regexlearn.com/fr/learn/regex101)
- [Fonction preg_match combinée aux expressions régulières pour vérifier les données](https://www.php.net/manual/fr/function.preg-match)
- [Fonction is_numeric()](https://www.php.net/manual/fr/function.is-numeric.php)
- [Fonction move_upload pour déplacer un fichier *uploadé*](https://www.php.net/manual/fr/function.move-uploaded-file.php)

## Aide sans la validation avec les Regex

- Utilisez pour les vérifications la fonctions [empty()](https://www.php.net/manual/fr/function.empty) ou [isset()](https://www.php.net/manual/fr/function.isset.php) ou [filter_input](https://www.php.net/manual/fr/function.filter-input.php)

## Aide avec validation via les REGEX (en bonus et en option)

Voici des expressions régulières pour les champs du formulaire :
- email : `"/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i"`
- Nom et prénom :  `"/^[a-z]+(?!_)(\s|-)?[a-z]+\$/i"`
- Age `"/^(1[0-2][0-9]|1[4-9]|[2-9][0-9]|130)\$/"`
- Ville et pays : `"/^[a-z]+(?!_)(\s|-)?[a-z0-9|\s]+\$/i"`
- Mot de passe : `"/^(?!abcdef|qwerty|azerty|123456)(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[&\$+\-*\/#~€%^!-_]).{15,36}\$/"`

---

## PARTIE I : récupération pays, villes et insertion des utilisateurs dans la base de données

1. Récupérez ce [zip (Si vous l'avez déjà récupéré au début de l'énoncé pas besoin de le refaire une seconde fois)](./ressources/tp_form.zip)
2. Une fois que vous avez décompressé le dossier, lisez le `README.md` présent à la racine du dossier compressé.
3. Au niveau du code côté back (dossier back), vous devez :
- Récupérez les pays (depuis le fichier `back/countries`) et les affichez au niveau du formulaire côté front (`sign_up.php`, la boucle est déjà positionnée donc vous n'avez rien à faire au niveau de l'affichage)
- Récupérez les villes d'un pays sélectionné depuis le formulaire et les afficher.

Pour la petite explication, le fichier `js/index.js` envoie une requête asynchrone (en gros, une requête au serveur, ce dernier répond au client sans avoir à recharger la page, l'affichage des résultats est déjà géré côté JS donc vous n'avez pas besoin de le gérer) à PHP
4. Au niveau du formulaire d'inscription, récupérez et vérifiez avant d'insérer les informations en base de données.
Dans le cas où toutes les conditions (tous les champs requis seraient renseignés et au bon format) seraient remplies, retournez une réponse au format JSON du type `{"message" => "OK"}`.
Dans le cas contaire `{"message" => "KO"}`

---

## PARTIE II : création des fichiers JSON et récupération des images déposées par les utilisateurs

1. A chaque soumission pour une inscription, créez un nouveau fichier *JSON* contenant les informations envoyées.
**Une soumission = 1 fichier crée lorsque tout est ok**.
Le fichier est au format JSON (extension .JSON avec les données en JSON clé-valeur de l'utilisateur)
2. Modifiez le formulaire en y ajoutant les lignes de code ci-dessous pour permettre aux utilisateurs d'envoyer une photo et stockez les photos dans le dossier `front/images`.
- Dans la balise ouvrante  `form` du fichier `front/sign_up.php`, ajoutez l'attribut et valeur suivante ***`enctype="multipart/form-data"`***
- Entre la balise ouvrante et fermante de `form` toujours du fichier `front/sign_up.php`, ajoutez le code HTML suivant : `<div class="my-3"><label for="picture" class="form-label">Photo de profil</label><input class="form-control" type="file" id="picture" name="picture"></div>`

---

## PARTIE III : insertion dans la base de données avec les mots de passe hachée

- **Les requêtes de création de la base de données et des tables se trouvent dans le fichier app/back/data/database.sql**
- [Fonction *password_hash()* pour hacher les mots de passe](https://www.php.net/manual/fr/function.password-hash)
- [Fonction *password_verify()* pour vérifier que 2 mots de passe (un haché et l'autre non) sont identiques](https://www.php.net/manual/fr/function.password-verify.php)

---

<!-- ## PARTIE IV : session et cookies

***PS : ajoutez la méthode `POST` dans la balise form du fichier front/index.php***
1. Connectez l'utilisateur en vérifiant ses informations (email et mot de passe dans la base de données). Lorsque les informations sont correctes, lancez une session et stockez les informations de votre choix dans les cookies et/ou variables de session.
2. Depuis la page `back/dashboard.php`,affichez les informations stockées dans les cookies et la session de l'utilisateur.
3. Modifiez votre code pour rediriger l'utilisateur suite à sa connexion avec succès vers la page `dashboard.php` en utilisant [header('Location: xxxx');](https://www.php.net/manual/en/function.header.php)
4. Empêchez un utilisateur qui possède une session d'accéder à nouveau aux pages de connexion et d'inscription.
5. Créez une nouvelle page `logout.php` dans le dossier `back`.
6. Déconnectez un utilisateur depuis l'action vers le bouton présent dans le fichier `back/dashboard.php` qui fait une requête vers le fichier `back/logout.php` via la balise `<a href="back/logout">`.
7. Redirigez l'utilisateur vers la page de connexion, une fois la session en cours est détruite. -->
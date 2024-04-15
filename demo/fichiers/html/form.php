<?php
// Attention attribut enctype="multipart/form-data" obligatoire sinon impossible de récupérer les infos sur les fichiers côté Back -->
echo '<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="picture">
    <input type="submit" value="Valider">
</form>';
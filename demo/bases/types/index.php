<?php

// Changement de type via les fonctions dédiées intval; floatval(), etc ou via la fonction générique settype()

$code = '69003'; // un string
settype($code, 'int');

<?php

$age = 10;
if ($age <= 10) {
  echo 'Enfant';
} else if ($age > 10 && $age < 18) {
  echo 'Adolescent';
} elseif ($age < 50) {
  echo 'Majeur';
} else {
  echo 'Senior';
}

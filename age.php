<?php

$anneeNaissance = 1999;
$date = date('Y');

echo $date;

$age = $date - $anneeNaissance;

echo "<br>";

echo "La personne née en $anneeNaissance a $age ans(s)";

<?php

$tab = [11, 50, 44, 25];

echo "Le tableau " . implode(', ', $tab) . "<br>";

// $nombre = count($tab);

// echo "le tableau a $nombre éléments <br>";
// $min = min($tab);

// echo "minimum est: $min <br>";


for ($i = 0; $i < count($tab) - 1; $i++) {
    for ($j = 0; $j < count($tab) - $i - 1; $j++) {

        $temp = '';
        if ($tab[$j] > $tab[$j + 1]) {

            $temp = $tab[$j];
            $tab[$j] = $tab[$j + 1];
            $tab[$j + 1] = $temp;
        }
    }
}

for ($i = 0; $i < count($tab); $i++) {
    echo $tab[$i];
}

echo "Le minimun est: $tab[0]";
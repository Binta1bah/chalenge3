<?php

$tab = [1, 2, 3, 4, 5, 6, 7, 8, 9];
echo "le tableau est :" . implode(', ', $tab) . "<br>";

echo 'les nombre paires sont: ';

for ($i = 0; $i < count($tab); $i++) {


    if ($tab[$i] % 2 == 0) {
        echo $tab[$i] . " ";
    }
}


echo '<br> les nombre impaires sont: ';

for ($i = 0; $i < count($tab); $i++) {

    if ($tab[$i] % 2 != 0) {

        echo $tab[$i] . " ";
    }
}

<?php

// $tab = ['Pita', 'labé', 'Dakar', 'Conakry', 'Mamou'];

// $ville = 'Pita';

// if (in_array($ville, $tab)) {
//     echo "$ville est dans le tableau";
// } else {
//     echo "$ville n'est pas dans le tableau";
// }



$tab = ['Pita', 'labé', 'Dakar', 'Conakry', 'Mamou'];

$conversion = array_map('strtolower', $tab);

$ville = 'pita';

$rech = strtolower($ville);

if (in_array($rech, $tab)) {
    echo "$ville est dans le tableau";
} else {
    echo "$ville n'est pas dans le tableau";
}

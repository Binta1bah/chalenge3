<?php



// function remplaceMot ($phrase, $ancienMot, $nouveauMot) {

//     $nouvellePhrase = str_replace($ancienMot, $nouveauMot, $phrase);

//     return $nouvellePhrase;

// } 

// $phrase = "Baba vas a l'école";
// $mot1 = 'Baba';
// $mot2 = 'Ali';

// $nouveau = remplaceMot($phrase, $mot1, $mot2);

// echo "L'ancienne phrase est: " .$phrase ."<br>";
// echo "La nouvelle phrase est: " .$nouveau ."<br>" ;



function remplaceCaractere($phrase, $ancienCaract, $nouveauCaract)
{


    for ($i = 0; $i < strlen($phrase); $i++) {

        if ($phrase[$i] == $ancienCaract) {

            $ancienCaract = $nouveauCaract;
        }
    }
}

$phrase = "Baba vas a l'école";
$mot1 = 'B';
$mot2 = 'A';

$nouvellePhrase = remplaceCaractere($phrase, $mot1, $mot2);

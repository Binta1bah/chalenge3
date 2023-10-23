<?php


function convertir($montant)
{
    $resutat = $montant * 14;

    return $resutat;
}


if (isset($_POST['envoyer'])) {
    $fcfa = $_POST['gn'];
    $gnf = 0;

    if (empty($fcfa) || !is_numeric($fcfa) || $fcfa < 0) {
        echo "Donner un montant correct <br>";
    } else {

        $gnf = convertir($fcfa);

        echo "$fcfa fcfa vaut $gnf gnf <br>";
    }
}




// if (isset($_POST['envoyer'])) {
//     $fcfa = $_POST['gn'];

//     if (empty($fcfa) || !is_numeric($fcfa) || $fcfa < 0) {
//         echo "Donner un montant correct <br>";
//     } else {

//         $francGn = $fcfa * 14;

//         echo "$fcfa fcfa vaut $francGn gnf <br>";
//     }
// }

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="number" name="gn">
        <input type="submit" name="envoyer" value="Envoyer">
    </form>
</body>

</html>
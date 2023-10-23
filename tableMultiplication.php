<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="nombre" placeholder="Donnez le nombre">
        <input type="submit" name="envoyer" value="Envoyer">
    </form>
</body>

</html>



<?php

session_start();
if (!isset($_SESSION['multi'])) {
    $_SESSION['multi'] = array();
}


// function multiplication($nb)
// {

//     for ($i = 0; $i < 11; $i++) {
//         $resultat = $nb * $i;
//         echo "$nb * $i = $resultat <br>";


//         # code...
//     }
// }

// if (isset($_POST['envoyer'])) {
//     $nombre = $_POST['nombre'];

//     if (empty($nombre) || !is_numeric($nombre)) {
//         echo "Entrer un nombre";
//     } else {

//         echo "Table de multiplication de $nombre: <br>";

//         $result = multiplication($nombre);

//         $_SESSION['multi'][] = $result;
//     }

//     foreach ($_SESSION['multi'] as $mu) {

//         echo $mu;
//         # code...
//     }


function multiplication($nb)
{
    $table = array();;

    for ($i = 0; $i < 11; $i++) {
        $resultat = $nb * $i;
        $table[] = "$nb * $i = $resultat <br>";
    }

    return $table;
}


if (isset($_POST['envoyer'])) {
    $nombre = $_POST['nombre'];

    if (empty($nombre) || !is_numeric($nombre) || is_float($nombre)) {
        echo "Entrer un nombre";
    } else {

        echo "Table de multiplication de $nombre: <br>";

        $result = multiplication($nombre);

        $_SESSION['multi'][] = $result;

        foreach ($result as $re) {
            echo $re;
        }
    }
}

echo "<br>";
echo "Historique:<br>";

foreach ($_SESSION['multi'] as $mu) {
    echo "<br>";
    foreach ($mu as $ta) {
        echo $ta;
    }
}

?>
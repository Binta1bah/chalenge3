<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">

        <input type="text" name="nb">
        <input type="submit" name="envoyer" value="Envoyer">



    </form>
</body>

</html>

<?php

if (isset($_POST['envoyer'])) {
    $nombre = $_POST['nb'];

    // $fmt = new NumberFormatter('fr_FR', NumberFormatter::SPELLOUT);
    // $enLettres = $fmt->format($nombre);

    // echo "Le nombre $nombre en lettres : $enLettres";



    if ($nombre > 9 || $nombre < 0 || !is_numeric($nombre) || empty($nombre)) {
        echo " Donnez un nombre entre 0 et 9 ";
    } elseif ($nombre == 0) {
        echo "le nombre $nombre en lettre: zero";
    } elseif ($nombre == 1) {
        echo "le nombre $nombre en lettre: Un";
    } elseif ($nombre == 2) {
        echo "Le nombre $nombre en lettre: deux";
    } elseif ($nombre == 3) {
        echo "Le nombre $nombre en lettre: trois";
    } elseif ($nombre == 4) {
        echo "Le nombre $nombre en lettre: quatre";
    } elseif ($nombre == 5) {
        echo "Le nombre $nombre en lettre: cinq";
    } elseif ($nombre == 6) {
        echo "Le nombre $nombre en lettre: six";
    } elseif ($nombre == 7) {
        echo "Le nombre $nombre en lettre: sept";
    } elseif ($nombre == 8) {
        echo "Le nombre $nombre en lettre: huit";
    } elseif ($nombre == 9) {
        echo "Le nombre $nombre en lettre: neuf";
    }
}

?>
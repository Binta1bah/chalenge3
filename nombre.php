<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">

        <input type="number" name="a">
        <input type="number" name="b">
        <input type="submit" name="envoyer" value="Envoyer">


    </form>
</body>

</html>

<?php

if (isset($_POST['envoyer'])) {

    $a = $_POST['a'];
    $b = $_POST['b'];

    // $somme = $a + $b;

    function somme($nb1, $nb2)
    {
        $somme = $nb1 + $nb2;

        return $somme;
    }

    $result = somme($a, $b);


    $dif = $a - $b;
    $multi = $a * $b;

    echo "La somme de " . $a . " et " . $b . " est: " . $result . "<br>";
    echo "La difference de " . $a . " et " . $b . " est: " . $dif . "<br>";

    echo "Le produit de " . $a . " et " . $b . " est: " . $multi . "<br>";
}









?>
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
        <input type="submit" name="envoyer" value="Envoyer">


    </form>
</body>

</html>

<?php

if (isset($_POST['envoyer'])) {
    $nb = $_POST['a'];

    $carre = $nb * $nb;

    echo "Le carrée de " . $nb . " est: " . $carre . "<br>";
}

?>
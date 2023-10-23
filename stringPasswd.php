<?php

function password($pass)
{
    if (strlen($pass) >= 8) {
        $result = true;
    } else {
        $result = false;
    }

    return $result;
}

$resultat = password('21457hg');

if ($resultat) {
    echo "la conditon est True";
}else {
    echo "La condition est False";
}

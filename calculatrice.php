<?php

function calculatrice($a, $b, $operateurs)
{
    switch ($operateurs) {
        case '+':
            $resutat = $a + $b;
            echo "$a + $b = " . $resutat;
            break;
        case '-':
            $resutat = $a - $b;
            echo "$a - $b = " . $resutat;
            break;
        case '*':
            $resutat = $a * $b;
            echo "$a * $b = " . $resutat;
            break;
        case '/':
            if ($b != 0) {
                $resutat = $a / $b;
                echo "$a / $b = " . $resutat;
            } else {
                echo "Dividion par 0 impossible";
            }
            break;


        default:
            echo "Operateur non reconnu";
            break;
    }
}

calculatrice(20, 10, '/');

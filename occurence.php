<?php

function occurenceElement($phrase, $element)
{

    $phrase = strtolower($phrase);
    $element = strtolower($element);

    $occurence = substr_count($phrase, $element);

    return $occurence;
}

$phrase = "Lui c'est sadio et j'aime beaucoup sadio";
$element = "sadio";

$nombreOccurence = occurenceElement($phrase, $element);
echo "Le nombre d'occurencr de $element dans la phrase est: " . $nombreOccurence;

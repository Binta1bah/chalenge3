<?php

$patients = [
    ['nom' => 'Dupont', 'prenom' => 'Jean', 'covid' => true],
    ['nom' => 'Martin', 'prenom' => 'Marie', 'covid' => false],
    ['nom' => 'Durand', 'prenom' => 'Pierre', 'covid' => true],
    ['nom' => 'Lefevre', 'prenom' => 'Sophie', 'covid' => true]

];



foreach ($patients as $p) {
    if ($p['covid'] == true) {
        echo $p['prenom'] . ' ' . $p['nom'] . ' a le COVID-19.<br>';
    }
}

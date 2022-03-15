<?php
// Fonction pour trouver la valeur minimale d'un tableau
// TODO: Corriger l'erreur dans la fonction
function trouver_min($tableau) {
    $min = $tableau[0];
    foreach ($tableau as $element) {
        if ($element<=$min) {
            $min = $element;
        }
    }

    return $min;
}

// Fonction pour trouver la valeur maximale d'un tableau
function trouver_max($tableau) {
    // TODO: Écrire le corps de la fonction
    $max = $tableau[0];
    foreach ($tableau as $element) {
        if ($element>=$max) {
            $max = $element;
        }
    }

    return $max;
}

// Fonction pour trouver la valeur la plus proche de zéro
function trouver_plus_proche_de_zero($tableau) {
    // TODO: Écrire le corps de la fonction
    $procheZero = $tableau[0];
    foreach ($tableau as $element) {
        if (abs($element)<abs($procheZero)) {
            $procheZero = $element;
        }
    }

    return $procheZero;
}

// TODO: Ajouter les fonctions manquantes
function productNumber($number)
{
    $result = $number*$number;
    if(($number * $number)==$result)
    {
        return $result;
    }
}

function matchAlphabetIndex($index)
{
    $alphaTable = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i',
                    'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r',
                    's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
    
    return $alphaTable[$index-1];
}

?>

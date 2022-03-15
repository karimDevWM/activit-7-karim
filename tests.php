<?php
echo "---------------------------------------------\n";
echo "Tests unitaires du fichier ma_bibliothque.php\n";
echo "---------------------------------------------\n";

require("ma_bibliotheque.php");

// Nos tests unitaires utilisent la fonction `assert`. Si vous ne connaissez
// pas les assertions, cherchez dans la documentation officielle de PHP comment
// elles fonctionnent.
// Les lignes suivantes permettent de les activer (car elles peuvent être
// désactivées dans la configuration de PHP) et de stopper le script avec une
// erreur au cas où une assertion n'est pas vraie.

function assert_failed($file, $line, $expr) {
    print "Assertion failed in $file on line $line\n";
    exit(1);
}

assert_options(ASSERT_ACTIVE, true);
assert_options(ASSERT_BAIL, true);
assert_options(ASSERT_CALLBACK, 'assert_failed');


// Fonction trouver_min
assert(trouver_min([7, 9, 12, 45, 789, 2, 3]) == 2);
assert(trouver_min([12, 45, 8, 0]) == 0);
assert(trouver_min([12]) == 12);
assert(trouver_min([-7, 12, 0, 67, 98, -8, 41]) == -8);
assert(trouver_min([-78, -93, -109, -2, -132]) == -132);
assert(trouver_min([-78, -93, -109, -2, -132, 0]) == -132);
echo " -> fonction trouver_min: OK\n";


// Fonction trouver_max
assert(trouver_max([7, 9, 12, 45, 789, 2, 3]) == 789);
assert(trouver_max([12, 45, 8, 0]) == 45);
assert(trouver_max([12]) == 12);
assert(trouver_max([-7, 12, 0, 67, 98, -8, 41]) == 98);
assert(trouver_max([-78, -93, -109, -2, -132]) == -2);
assert(trouver_max([-78, -93, -109, -2, -132, 0]) == 0);
echo " -> fonction trouver_max: OK\n";


// Fonction trouver_plus_proche_de_zero
assert(trouver_plus_proche_de_zero([7, 9, 12, 45, 789, 2, 3]) == 2);
assert(trouver_plus_proche_de_zero([12, 45, 8, 0]) == 0);
assert(trouver_plus_proche_de_zero([12]) == 12);
assert(trouver_plus_proche_de_zero([-7, 12, 67, 98, -8, 41]) == -7);
assert(trouver_plus_proche_de_zero([-78, -93, -109, 24, -132]) == 24);
assert(trouver_plus_proche_de_zero([-78, -93, -109, -2, -132]) == -2);
echo " -> fonction trouver_plus_proche_de_zero: OK\n";


// Oups, cette fonction n'a pas de nom... Serez-vous trouver ce qu'elle doit
// faire à partir des tests unitaires ?
assert(productNumber(1) == 1);
assert(productNumber(2) == 4);
assert(productNumber(5) == 25);
assert(productNumber(11) == 121);
echo " -> productNumber: OK\n";


// Encore une fonction bien mystérieuse !
assert(matchAlphabetIndex(14) == "n");
assert(matchAlphabetIndex(20) == "t");
assert(matchAlphabetIndex(11) == "k");
echo " -> fonction matchAlphabetIndex: OK\n";


// Conclusion
echo "\n👍 C'est tout bon ! Bien joué !\n";
?>

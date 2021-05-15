<?php
// for ($x = 1; $x <= 5; $x++) {
//     for ($y = 1; $y <= $x; $y++) {
//         echo '*';
//         if ($y < $x) {
//             echo " ";
//         }
//     }
//     echo "\n";
// }

// $n = 5;
// for ($i = 1; $i <= $n; $i++) {
//     for ($j = 1; $j <= $i; $j++) {
//         echo '* ';
//     }
//     echo "\n";
// }
// for ($i = $n; $i >= 1; $i--) {
//     for ($j = 1; $j <= $i; $j++) {
//         echo '* ';
//     }
//     echo "\n";
// }

// Write a PHP program to print alphabet pattern 'L'.
for ($x = 1; $x <= 6; $x++) {
    echo "*\n";

    if ($x == 6) {
        for ($y = 1; $y <= 5; $y++) {
            echo '*';
        }
    }
}

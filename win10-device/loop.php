<?php
// $x = 0;

// while ($x < 10) {
//     if ($x == 4) {
//         $x++;
//         continue;
//     }
//     echo "The number is: $x" . "<br>";
//     $x++;
// }

// how to get roll different 6
$rolls = 0;
do {
    $rolls++;
} while (mt_rand(1, 6) !== 6);
print_r($rolls);



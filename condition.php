<?php
//How to count dice roll until 6 is rolled
//$rolls = 0;
//do {
//    $rolls++;
//} while (mt_rand(1, 6) != 6);
//print_r($rolls);
//echo "\n";


// How to count average of 100 random number from 1 to 100
// $numbers = 100;
// $total = 0;
// for ($i = 1; $i <= $numbers; $i++) {
//     $total += mt_rand(1, 100);
// }
// var_dump('Total: ' . $total);
// echo "\n";
// $avg = $total / 100;
// echo 'Avg is: ';
// var_dump($avg);

// // Using while loop
// $total = 0;
// $count = 0;
// while ($count < 100) {
//     $total += mt_rand(1, 100);
//     $count++;
// }
// var_dump('Total using while loop: ' . $total);

// get even number from 0 to 10 using continute statement
$count = 1;
while ($count <= 10) {
    if ($count % 3 == 0 || $count == 1) {
        $count++;
        continue;
    }
    echo $count . "\n";
    $count++;
}

<?php
//$age = 18;
//echo ($age >= 18) ? 'Can vote!' : 'Cán not vote';
//$action = filter_input(INPUT_POST, 'action');
//if ($action == null) {
//    $action = filter_input(INPUT_GET, 'action');
//    if ($action == null) {
//        $action = 'list_product';
//    }
//}
//
//switch ($action) {
//    case 'list_product':
//    {
//
//    }
//}

// A while loop that finds the average of 100 random numbers
// $total = 0;
// $count = 0;
// while ($count < 100) {
//     $number = mt_rand(1, 100);
//     $total += $number;
//     $count++;
// }

// $avg = $total / $count;
// echo 'The average is: ' . $avg;
// echo "\n";

// A while loop that counts dice rolls until a six is rolled
// $rolls = 0;

// Start random roll dice not equal = 6 if equal 6 then stop\
// do {
//     $rolls++;
// } while (mt_rand(1, 6) != 6);
// echo 'Rolls is ';
// var_dump($rolls);

// if (!isset($rate)) $rate = 0.75;
// var_dump($rate);

// $rolls = 0;
// do {
//     $rolls++;
// } while (rand(1, 6) != 6);
// print_r('rolls is ' . $rolls);


// $count  = 0;
// $total = 0;
// while ($count < 10) {
//     $number = mt_rand(1, 10);
//     $total += $number;
//     $count++;
// }
// var_dump($count);
// $avg = $total / $count;
// echo 'AVG is ' . $avg;

// $count = 1;
// $arr = [];
// while ($count <= 10) {
//     if ($count % 2 == 0) {
//         $arr[] = $count;
//     }
//     $count++;
// }
// echo '<pre>';
// print_r($arr);

// count string lenght manually
$name = 'phuoc';
$count = 0;
while (isset($name[$count])) {
    // var_dump($name);
    $count++;
}
// var_dump($count);
var_dump($name[0]);
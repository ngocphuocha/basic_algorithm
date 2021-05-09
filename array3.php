<?php
//*Code that store 10 random number in array

// $number = [];
// for ($i = 0; $i < 10; $i++) {
//     $number[] = mt_rand(1, 100);
// }

// $number_string = '';
// for ($i = 0; $i < count($number); $i++) {
//     $number_string .= $number[$i] . ' ';
// }
// echo "Display all element of array\n";
// echo $number_string;

// $prices = [141.95, 212.95, 411, 10.95];
// $sum = 0;
// for ($i = 0; $i < count($prices); $i++) { // !loop 5 time (from 0 to 4)
//     $sum += $prices[$i];
// }
// $avg = $sum / count($prices);

// echo "Sum: $sum\n";
// echo "Avg: $avg";


// *How to skip gaps in array
$number = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
unset($number[2], $number[6]);
$number_string = '';
// print_r($number);
// exit;
end($number); // Move a curent cursor to last element of array
$last = key($number); // Return the index of the array element that the cusor is on
for ($i = 0; $i < count($number); $i++) {
    if (isset($number[$i])) {
        $number_string .= $number[$i] . ' ';
    }
}
echo $number_string;

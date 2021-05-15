<?php

// $number = [1, 2, 3, 4, 5];
// unset($number[2]);
// echo count($number);
// echo '<pre>';
// print_r($number);

// foreach($number as $value)
// {
//     echo $value;
// }

// How to add a new element to begin array
// $arr1 = [4];
// $arr = [1, 2, 3];
// $arr = array_merge($arr1, $arr);
// var_dump($arr);

$temp = [4];
$arr = [1, 2, 3];
for ($i = 0; $i < count($arr); $i++) {
    $temp[] = $arr[$i];
}
// print_r($temp);

$arr = $temp;
print_r($arr);

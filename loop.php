<?php
//* How to find the max and min element of 10 random element;

//! Solution 1
//$count = 0;
//$max = -INF; // to get the max number with INF
//$min = INF; // to get the min number with INF of
//
//do {
//    $number = mt_rand(0, 10);
//    $max = max($max, $number); // get the larger of the two argument
//    $min = min($min, $number); // get the smaller of the two argument
//    $count++;
//} while ($count < 10);
//echo 'Solution 1 <br>';
//echo "Max is $max and Min is $min";
//echo '<br>';
//
////! Solution 2
//$count = 0;
//$arr = [];
//echo '<pre>';
//while ($count < 10) {
//    $count++;
//    $number = rand(1, 10); // get 10 random number from 1 to 10
//    $arr[] = $number;
//}
//echo 'Solution 2 <br>';
//print_r($arr);
//echo "Max element of 10 random number: " . max($arr) . "<br>";
//echo "Min element of 10 random number: " . min($arr);

//for ($count = 1; $count <= 10; $count++) {
//    echo  $count . '<br>';
//}
// a loop is display even number
//for ($number = 0; $number <= 10; $number = $number + 2)
//{
//    echo $number . "\n";
//}

// A loop to display all the factor of a number
//$number = 18;
//for ($i = 1; $i < 18; $i++) {
//    if ($number % $i == 0) {
//        echo $i . 'is a factor of ' . $number . '<br>';
//    }
//}

//while (true) {
//    $number = mt_rand(1, 10);
//    if ($number % 2 == 0) {
//        $evenNumber = $number;
//        break;
//    }
//}
//var_dump($evenNumber);


function checkPrimeNumber($n)
{
    // Neu n < 2 thi khong phai la SNT
    if ($n < 2) {
        return false;
    }

    // Neu n = 2 la SNT
    if ($n == 2) {
        return true;
    }

    // Neu n la so chan thi ko phai la SNT
    if ($n % 2 == 0) {
        return false;
    }

    // Lap qua cac so le
    for ($i = 3; $i < ($n - 1); $i += 2) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

$n = 89;
if (checkPrimeNumber($n)) {
    echo "$n is prime number";
} else {
    echo "$n is not prime number";
}
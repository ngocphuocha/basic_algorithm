<?php

$arr = array();
$n = 10;
$m = 20;
$number = 5;

// in ra cac so chan
$arr_chan = array();

for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $m; $j++) {
        $arr[$i][$j] = $number;
        $number++;
    }
}
echo '<pre>';
print_r($arr);
exit;

// thu tap cac so chan
for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $m; $j++) {
        if ($arr[$i][$j] % 2 == 0) {
            $arr_chan[] = $arr[$i][$j];
        }
    }
}


// khoi tao $sum
$sum = 0;

// thu than cac so chan
for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $m; $j++) {
        $sum = $sum + $arr[$i][$j];
        //$sum += $arr[$i][$j];
    }
}

var_dump($sum);


echo '<pre>';
print_r($arr_chan);

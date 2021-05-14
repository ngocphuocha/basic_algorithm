<?php
function sumArr(array $arr)
{
    $sum = 0;
    for ($i = 0; $i < count($arr); $i++) {
        $sum += $arr[$i];
    }
    return $sum;
}
echo sumArr([1, 2, 3, 4, 10]);

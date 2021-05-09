<?php
$number = 0;
while ($number < 10) {
    if ($number % 3 == 0) { // if number is odd then ignore
        $number++;
        continue;
    }
    echo "$number \n";
    $number++;
}

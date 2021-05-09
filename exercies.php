<?php

class Exercise
{
    /**
     * Write a program in C to display the first 10 natural numbers.
     */
    public function print1To10()
    {
        for ($i = 1; $i <= 10; $i++) {
            echo "$i" . " ";
        }
    }

    /**
     * Write a C program to find the sum of first 10 natural numbers.
     */
    public function sum1To10()
    {
        $sum = 0;
        for ($i = 1; $i <= 10; $i++) {
            $sum += $i;
        }
        print_r($sum);
    }
    // Write a program in C to display n terms of natural number and their sum
    public function ex3(int $n)
    {
        $sum = 0;
        $arr = [];
        for ($i = 1; $i <= $n; $i++) {
            $arr[] = $i;
            $sum += $i;
        }
        print_r($arr);
        print_r("Sum is $sum");
    }

    // Write a program in C to read 10 numbers from keyboard and find their sum and average.
    public function ex4()
    {

    }
}
$test = new Exercise();
echo '<pre>';
$test->ex3(7);

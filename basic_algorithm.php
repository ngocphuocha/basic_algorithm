<?php
class Algorithm
{
    // Write a PHP program to compute the sum of the two given integer values. If the two values are the same, then returns triple their sum.

    /**
     * @param int $x
     * @param int $y
     * @return int
     */
    public function ex1($x, $y): int
    {
        if ($x == $y) {
            return ($x + $y) / 3;
        } else {
            return ($x + $y);
        }
    }
    // Write a PHP program to get the absolute difference between n and 51. If n is greater than 51 return triple the absolute difference.

    /**
     * @param  int $x
     * @return int
     */
    public function ex2($x): int
    {
        return $x > 51 ? $x - 51 : 51 - $x;
    }

    // Write a PHP program to check two given integers, and return true if one of them is 30 or if their sum is 30.

    /**
     * @param int $x
     * @param int $y
     * @return bool
     */
    public function ex3(int $x, int $y): bool
    {
        if (($x + $y) == 30) {
            return true;
        } elseif ($x == 30 || $y == 30) {
            return true;
        } else {
            return false;
        }

        // other solution:
        //return ($x == 30) || ($y == 30) || ($x + $y == 30);
    }

    //4. Write a PHP program to check a given integer and return true if it is within 10 of 100 or 200.

    /**
     * @param  int $x
     * @return void bool
     */
    public function ex4(int $x): bool
    {
        return true ? (abs($x - 100) < 10 || abs($x - 200) < 10) : false;
    }

    // Write a PHP program to create a new string where 'if' is added to the front of a given string. If the string already begins with 'if', return the string unchanged.

    /**
     * ex5
     *
     * @param  string $str
     * @return string
     */
    public function ex5(string $str): string
    {
        if (strlen($str) > 2 && (substr($str, 0, 2) == 'if')) {
            return $str;
        } else {
            return "if " . $str;
        }
    }
}
// create object for testing
$test = new Algorithm();
// echo $test->ex1(5, 8);
// echo $test->ex2(53);
// var_dump($test->ex3(20, 20));
// var_dump($test->ex4(89));
var_dump($test->ex5('if else'));

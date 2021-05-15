<?php
class ArrayExercise
{
    // 13. Write a PHP script which displays all the numbers between 200 and 250 that are divisible by 4. Note : Do not use any PHP control statement.
    //Expected Output : 200,204,208,212,216,220,224,228,232,236,240,244,248
    public function ex13()
    {
        //*My solution
        $number = 200;
        $arr = [];
        while ($number <= 250) {
            if ($number % 4 == 0) {
                $arr[] = $number;
            }
            $number++;
        }
        return $arr;

        // True answer : echo implode(",",range(200,250,4))."\n";
    }

    // 16. Write a PHP script to get the largest key in an array.
    public function ex16()
    {
        $ceu = array(
            "Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels",
            "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" => "Paris", "Slovakia" => "Bratislava",
            "Slovenia" => "Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland" => "Dublin",
            "Netherlands" => "Amsterdam", "Portugal" => "Lisbon", "Spain" => "Madrid", "Sweden" => "Stockholm",
            "United Kingdom" => "London", "Cyprus" => "Nicosia", "Lithuania" => "Vilnius", "Czech Republic" => "Prague", "Estonia" => "Tallin", "Hungary" => "Budapest", "Latvia" => "Riga", "Malta" => "Valetta", "Austria" => "Vienna", "Poland" => "Warsaw"
        );
        $key = max(array_keys($ceu));
        return "Key: $key and country is $ceu[$key]";
    }
    // 59. Write a PHP program to create a range like the following array.Go to the editor
    // Array
    // (
    // [20] => 2
    // [21] => 3
    // [22] => 4
    // [23] => 5
    // [24] => 6
    // [25] => 7
    // )
    public function ex59()
    {
        // Internet solution
        // $arr = array_combine(range(20, 25), range(2,7));
        // return $arr;

        // My solution
        $arr = [];
        $j = 2;
        for ($i = 20; $i <= 25; $i++) {
            while ($j <= 7) {
                $arr[$i] = $j;
                $j++;
                break;
            }
        }
        return $arr;
    }
}
$demo = new ArrayExercise();
// print_r($demo->ex13());
// print_r($demo->ex16());
print_r($demo->ex59());

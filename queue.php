<?php
class Queue
{
    // public function insertionSort($arr = [])
    // {
    //     for($i = 0; $i < count($arr); $i++){
    //         $j = $i -1;
    //         $temp = $arr[$i]; // temp = value arr[i]

    //         while($j>= 0 && $temp < $arr[$j]){
    //             // swap postion
    //             $arr[$j + 1] = $arr[$j];
    //             $j--; // decrease j to continute compare with temp
    //         }

    //         // else
    //         $arr[$j + 1] = $temp;
    //     }
    //     // Print value
    //     foreach ($arr as $key => $value) {
    //         # code...
    //         echo $value . "\n";
    //     }
    // }
    //
    public function insertionSort(&$arr) {
        for ($i=0; $i < count($arr); $i++) {
            $j = $i -1 ;
            $temporary = $arr[$i];

            while ($j >= 0 && $arr[$j] > $temporary) {
                // swap postion of $j + 1 before $j
                $arr[$j + 1] = $arr[$j];
                $j--; // decrease j for continute compare with temporary
            }
            // default
            $arr[$j + 1] = $temporary;
        }

        foreach($arr as $value) {
            echo $value . ' ';
        }
    }
}
$test = new Queue();
$arr = [ 4, 7, 99, 55, 62];
$test->insertionSort($arr);

<?php

class Search2
{
    private array $arr;

    public function __construct()
    {
        $this->arr = [1, 2, 6, 8, 10];
    }

    public function binarySearch($value): bool
    {
        sort($this->arr);
        $left = 0; // first index
        $right = count($this->arr) - 1; // last index

        while ($left <= $right) { // value has searched must be between left and right and value can be the first or the last index then using operator '='
            $middle = floor(($left + $right) / 2); // middle index of array

            // if value == $middle value then return value has search and value
            if ($value == $this->arr[$middle]) {
                echo "At a index <b style='color: red'>$middle</b> of array, ";
                return true;
            }

            // if value < middle value then ignore right side => range from before middle to left
            if ($value < $this->arr[$middle]) {
                $right = $middle - 1;
            } else { // if value > middle then ignore left side => range from after middle to right
                $left = $middle + 1;
            }
        }
        // else value not have in array 👌👌👌👌
        return false;
    }

    /**
     * @return array
     */
    public function getArr(): array
    {
        return $this->arr;
    }

    /**
     * @param array $arr
     */
    public function setArr(array $arr): void
    {
        $this->arr = $arr;
    }
}

$binary = new Search2();

// Set array
$binary->setArr([9, 44, 622, 199, 33]);
// Display an array
echo '<pre>';
echo "Display an array with sorting\n";
$array = $binary->getArr();
sort($array);
print_r($array);

$value = 622;
$result = $binary->binarySearch($value);
if ($result == false) {
    echo "Value <b style='color: red'>$value</b> not exists in array";
} else {
    echo "value <b style='color: red'>$value</b> exists in array";
}

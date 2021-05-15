<?php

class Search
{
    private array $arr;

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

    /**
     * Search a value in an array
     * @param array $arr
     * @param $value
     * @return false|float
     */
    public function binarySearch(array $arr, $value)
    {
        sort($arr);
        if (count($arr) !== 0) {
            $low = 0; // first index of array
            $high = count($arr) - 1; // end index of array

            while ($low <= $high) { // value need find must be between low and high (value can be first index or last index then using = operator)
                $middle = floor(($low + $high) / 2);// middle index of array

                // if value == middle index value, value find must be equal
                if ($arr[$middle] == $value) {
                    return $middle;
                }
                // Left side then move high less than middle == 1 index
                if ($value < $arr[$middle]) {
                    $high = $middle - 1;
                } else { // Right side then move low larger than middle == 1 index
                    $low = $middle + 1;
                }
            }
            return -1; // if value not have in array
        }
        return false;
    }
}

// Create object
$binarySearch = new Search();
$binarySearch->setArr([1, 2, 3, 4, 5, 6]); // Set array
echo '<pre>';
print_r($binarySearch->getArr());

$arr = $binarySearch->getArr(); // set array to $arr
$value = 5; // set value want find in array

// Search using binary search
$result = $binarySearch->binarySearch($arr, $value);
if ($result === false) {
    echo 'Array can not a empty array';
} else {
    if ($result === -1) {
        echo "$value is not exists in array";
    } else {
        echo "$value is exists at index $result";
    }
}
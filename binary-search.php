<?php

class Search
{
    private array $arr;

    public function __construct()
    {
        // Default array
        $this->arr = [1, 2, 3, 4, 5];
    }

    /**
     * @return int[]
     */
    public function getArr(): array
    {
        sort($this->arr);
        return $this->arr;
    }

    /**
     * @param array $arr
     */
    public function setArr(array $arr): void
    {
        sort($arr);
        $this->arr = $arr;
    }

    /**
     * search value in array using binary search algorithm
     * @param $value
     * @return bool
     */
    public function binarySearch($value): bool
    {
        sort($this->arr);
        $low = 0;
        $high = count($this->arr) - 1;
        while ($low <= $high) {
            $middle = floor(($low + $high) / 2);
            // If value == middle value index then value is exists in array
            if ($value == $this->arr[$middle]) {
                echo "At index $middle: ";
                return true; // return the index of value had found
            }

            // if $value < $middle value then ignore right side
            if ($value < $this->arr[$middle]) {
                $high = $middle - 1;
            } else { // ignore left side
                $low = $middle + 1;
            }
        }
        return false;
    }
}

$search = new Search();
$search->setArr([7, 55, 2, 8, 9]);

// Print array
echo '<pre>';
print_r($search->getArr());

// Search value in array
$value = 7;
$result = $search->binarySearch($value);
if ($result == true) {
    echo "Value <strong style='color: #2e9dc9;'>$value</strong> exists in array!";
} else {
    echo "Value <strong style='color: red;'>$value</strong> not exists in array!";
}

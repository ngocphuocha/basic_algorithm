<?php
class Search
{
  public $arr = [];

  public function __construct($arr = [])
  {
    $this->arr = $arr;
  }

  public function BinarySearch($value)
  {
    sort($this->arr);
    $low = 0;
    $high = count($this->arr) - 1; // end index off

    while ($low <= $high) {
      $middle = floor(($low + $high) / 2);
      if ($value == $this->arr[$middle]) {
        echo "At index $middle: ";
        return true;
      }

      if ($value > $middle) { // ignore left side
        $low = $middle + 1;
      } else { // ignore right side
        $high = $middle - 1;
      }
    }
    return false;
  }
}
$binarySearch = new Search([1, 6, 8, 111, 59]);
var_dump($binarySearch->binarySearch(111));

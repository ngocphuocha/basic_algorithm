<?php
class Short
{
  private $arr = [88, 8, 24, 200];

  public function getArr()
  {
    return $this->arr;
  }

  public function setArr($arr)
  {
    $this->arr = $arr;
  }

  /**
   * Short using insertion short algorithm
   *
   * @return void
   */
  public function insertionShort()
  {
    for ($i = 0; $i < count($this->arr); $i++) {
      $j = $i - 1;
      $temp = $this->arr[$i];

      while ($j >= 0 && $this->arr[$j] > $temp) {
        // swap position
        $this->arr[$j + 1] = $this->arr[$j];
        // Decease J to continute compare
        $j--;
      }
      // default
      $this->arr[$j + 1] = $temp;
    }
  }
}
$demo = new Short(); // create object for testing

print_r($demo->getArr()); // display default array not short

$demo->insertionShort(); // short array

// display array after short
echo "After short\n";
print_r($demo->getArr());

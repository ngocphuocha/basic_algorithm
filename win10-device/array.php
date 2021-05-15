<?php
class Test
{
    private $discounts = [];
    private $letters = [];

    public function createArr()
    {
        // $this->discounts = [];
        // $this->discounts[] = 1;
        // $this->discounts[] = 2;
        // return $this->discounts;

    }
    public function setLetter()
    {
        $this->letters = ['9', '1', '1', '1'];
        return $this->letters;
    }
    public function intro()
    {
        return 'Hello World!';
    }
    public function changeElement()
    {
        $this->letters[1] = '10';
        return $this->letters;
    }
    public function unsetElement()
    {
        unset($this->letters[0]);
        $this->letters = array_values($this->letters);
        return $this->letters;
    }
    public function getLetters()
    {
        return $this->letters;
    }
    /**
     * count array 
     *
     * @param  array $arr
     * @return number_element_of_array
     */
    public function countArr($arr)
    {
        return count($arr);
    }

    public function addLetter($value)
    {
        array_push($this->letters, $value);
    }
}
$test = new Test();
echo "Default: \n";

echo '<pre>';
print_r($test->setLetter());
echo "\n";

echo "After change: ";
print_r($test->changeElement());
echo "After unset position [0]: ";
print_r($test->unsetElement());

echo "The number element of array: ";
print_r($test->countArr($test->getLetters()));

echo "\n";

echo "Add new element to the end of array: \n";
$test->addLetter(10);
print_r($test->getLetters());
echo "\n";
echo 'Sum array:';
print_r(array_sum($test->getLetters()));

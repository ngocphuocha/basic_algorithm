<?php

class Short
{
    private array $arr;

    public function __construct()
    {
        $this->arr = [5, 8, 2, 70];
    }

    /**
     * Short array using insertion short
     */
    public function insertionShort()
    {
        for ($i = 0; $i < count($this->arr); $i++) {
            $j = $i - 1; // j is the index before i
            $temp = $this->arr[$i];

            while ($j >= 0 && $this->arr[$j] > $temp) {
                $this->arr[$j + 1] = $this->arr[$j];
                $j--; // Decrease $j to continue compare with $temp
            }
            // Default
            $this->arr[$j + 1] = $temp;
        }
    }

    /**
     * @return array
     */
    public function getArr(): array
    {
        return $this->arr;
    }

    /**
     * @param int[] $arr
     */
    public function setArr(array $arr): void
    {
        $this->arr = $arr;
    }
}

// Create object
$short = new Short();

// Set array
$short->setArr([4, 1, 69, 18, 100]);
// Print array
echo "<pre>";
print_r($short->getArr());
echo "\n";
echo "After short with insertion short\n";

// After short array
$short->insertionShort();
print_r($short->getArr());

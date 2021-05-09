<?php

class ArrayExcercises
{
    //Create a PHP script which displays the capital and country name from the above array $ceu. Sort the list by the capital of the country
    public function ex3()
    {
        // array country
        $ceu = array("Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels", "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" => "Paris", "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam", "Portugal" => "Lisbon", "Spain" => "Madrid", "Sweden" => "Stockholm", "United Kingdom" => "London", "Cyprus" => "Nicosia", "Lithuania" => "Vilnius", "Czech Republic" => "Prague", "Estonia" => "Tallin", "Hungary" => "Budapest", "Latvia" => "Riga", "Malta" => "Valetta", "Austria" => "Vienna", "Poland" => "Warsaw");

        // sort array by capital
        asort($ceu);
        // display result
        foreach ($ceu as $country => $capital) {
            echo "The capital of $country is $capital\n";
        }
    }

    // Delete an element from the above PHP array. After deleting the element, integer keys must be normalized.
    public function ex4(): array
    {
        $x = array(1, 2, 3, 4, 5);
        // remove index 3
        unset($x[3]);
        // normalized array
        $x = array_values($x);
        return $x;
    }

    // Write a PHP script to get the first element of the above array.
    public function ex5()
    {
        $color = array(4 => 'white', 6 => 'green', 11 => 'red');
        $color = array_values($color);
        return $color[0];
        // or return reset($color);

    }
    // 9. Write a PHP script to calculate and display average temperature, five lowest and highest temperatures.
    public function ex9()
    {
        
    }
}
$testing = new ArrayExcercises();
// $testing->ex3();
// print_r($testing->ex4());
print_r($testing->ex5());

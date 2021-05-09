<?php
// class Test
// {
//     private $names = []; // array name
//     private $numbers = []; // array number

//     public function arrayTest()
//     {
//         if (empty($this->names)) {
//             $this->names = ['phuoc', 'long', 'teo', 'tommy', 'Lara'];
//             // echo '<pre>';
//             print_r($this->names);
//         } else {
//             return $this->names;
//         }
//     }
//     public function setArrayNumber($arr = [])
//     {
//         $this->numbers = $arr;
//     }
//     /**
//      * countEvenNumber in array number
//      *
//      * @return void
//      */
//     public function countEvenNumber()
//     {
//         // echo '<pre>';
//         // print_r($this->numbers);
//         // exit();
//         $sum = 0;
//         foreach ($this->numbers as $key => $value) {
//             // check even number
//             if ($value % 2 == 0) {
//                 $sum += $value;
//             }
//         }
//         return $sum;
//     }
//     /**
//      * Get name
//      *
//      * @return $this->names
//      */
//     public function getNames()
//     {
//         return $this->names;
//     }
//     /**
//      * add new element to array names
//      *
//      * @param  mixed  $name
//      * @return void
//      */
//     public function addElementToArr($name)
//     {
//         array_push($this->names, $name);
//     }
// }
// $test = new Test();
// // $test->arrayTest();
// // $test->addElementToArr('Peter');

// // print_r($test->getNames());
// $test->setArrayNumber([2, 4, 6, 7, 5]);
// echo $test->countEvenNumber();

$name = [
    'first' => 'Ray',
    'last' => 'Haris',
];
$name['middle'] = 'Thomas';
ksort($name);
print_r($name);
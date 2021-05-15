<?php
class Category
{
    private $id, $name;
    private static $objectCount = 0; // declare a static property

    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
        self::$objectCount++; // update the status property
    }

    // A public method that gets the statis property
    public static function getObjectCount()
    {
        return self::$objectCount;
    }

    // The rest of the methods for the Category class
}
class Person
{
    const GREEN_EYES = 1;
    const BLUE_EYES = 2;
    const BROWN_EYES = 3;

    private $eye_color;

    public function getEeyeColor()
    {
        return $this->eye_color;
    }

    public function setEyeColor($value)
    {
        if (
            $value == self::GREEN_EYES || $value == self::BLUE_EYES ||
            $value == self::BROWN_EYES
        ) {
            $this->eye_color = $value;
        }
    }
}
// !Category class
// $brass = new Category(1, 'Guitars');
// $brass = new Category(2, 'Bass');
// echo '<p>Object count: ' . Category::getObjectCount() . '</p>'; // 2

// $brass = new Category(3, 'Drums');
// echo '<p>Object count: ' . Category::getObjectCount() . '</p>'; // 3

// Using a public static property will error because access modifier is private
// echo '<p>Object count: ' . Category::$objectCount . '</p>';

// !Person class
$person = new Person();
$person->setEyeColor(Person::GREEN_EYES);
var_dump($person->getEeyeColor());


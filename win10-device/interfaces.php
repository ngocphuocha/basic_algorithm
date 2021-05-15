<?php
//interface Animal {
//    public function makeSound();
//}
//class Cat implements Animal
//{
//    public function makeSound()
//    {
//        echo "meow";
//    }
//}
//
//$animal = new Cat();
//$animal->makeSound();
interface Animal {
    public function makeSound();
}

// Class definitions
class Cat implements Animal {
    public function makeSound()
    {
        echo 'Meow';
    }
}

class Dog implements Animal {
    public function makeSound() {
        echo 'Bark';
    }
}

class Mouse implements Animal {
    public function  makeSound()
    {
        // TODO: Implement makeSound() method.
        echo 'Squeak';
    }
}

// Create a list of animals
$cat = new Cat();
$dog = new Dog();
$mouse = new Mouse();
$animals = [$cat, $dog, $mouse];
// Tell the animals to make a sound
echo '<ul>';
foreach ($animals as $animal) {
    echo '<li>';
    $animal->makeSound();
    echo '</li>';
}
echo '</ul>';
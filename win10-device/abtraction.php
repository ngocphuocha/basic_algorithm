<?php
abstract class ParentClass
{
    // Abstract method with an argument
    abstract protected function prefixName($name);
}

class ChildClass extends ParentClass
{
    // The child class may define optional arguments that is not in the parent's abstract method
    public function prefixName($name, $separator = ".", $greet = "Dear"): string
    {
        if ($name == 'John Doe') {
            $prefix = "Mr";
        } elseif ($name == 'Jane Doe') {
            $prefix = 'Mrs';
        } else {
            $prefix = '?';
            return "$greet $prefix$separator $name";
        }
        return "$greet $prefix$separator $name";
    }
}


$class = new ChildClass;

var_dump($class->prefixName("Jane Doe"));
echo "\n";
var_dump($class->prefixName('John Doe'));
echo "\n";
var_dump($class->prefixName('Phuoc'));

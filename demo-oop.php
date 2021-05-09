<?php

// Abstract class
abstract class Car
{
    protected string $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    abstract public function intro();
}

class Audi extends Car
{
    public function intro(): string
    {
        return "This is $this->name car";
    }
}
$audi = new Audi('Audi');
echo $audi->intro();
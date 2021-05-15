<?php

trait message1
{
    public function msg1()
    {
        echo "OOP is fun! ";
    }

    abstract public function testing();
}

trait message2
{
}

class Welcome
{
    use message1;

    public function msg2()
    {
        $this->msg1();
        echo "OOP recces code duplication!";
    }

    public function testing(): string
    {
        return 'This is only demo!';
    }
}

class Welcome2
{
    use message2;
}

$obj = new Welcome();
$obj2 = new Welcome2();
// $obj->msg1();
// $obj2->msg2();
// echo $obj->testing();
$obj->msg2();
$obj->msg1();

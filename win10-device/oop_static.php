<?php

abstract class Demo
{
    abstract function demo(): string;
}

class demo2 extends Demo
{
    public function demo():string
    {
        return 'This is demo';
    }
}

class domain
{
    protected static function getWebsiteName(): string
    {
        return "W3Schools.com";
    }

}

class domainW3 extends domain
{
    public string $websiteName;

    /**
     * domainW3 constructor.
     */
    public function __construct()
    {
        $this->websiteName = parent::getWebsiteName();
    }
}

// Create obj

$domainW3 = new domainW3();
echo $domainW3->websiteName;
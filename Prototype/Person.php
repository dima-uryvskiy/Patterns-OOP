<?php


class Person
{
    private $name;
    private $age;
    public $man;

    public function __construct($name, $age, $man)
    {
        $this->name = $name;
        $this->age = $age;
        $this->man = $man;
    }

    public function __clone()
    {
        $this->name = $this->name;
        $this->age = $this->age;
        $this->man = $this->man;
    }
}


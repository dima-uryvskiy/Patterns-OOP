<?php

require_once("Person.php");
require_once("Man.php");

$man = new Man("Learn");
$person = new Person("Dima", 23, $man);
$clonePerson = clone $person;

var_dump($clonePerson);


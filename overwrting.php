<?php

class MyOtherClass extends MyClass
{
    public function __construct()
    {
        echo 'A new constructor in ' . __CLASS__ . '<br>';
    }
    
    public function newMethod()
    {
        echo "From a new method in " . __CLASS__;
    }
}

$newobj = new MyOtherClass; // outputs: A new constructor in MyOtherClass

echo $newobj->newMethod(); // outputs: From a new method in MyOtherClass

echo $newobj->getProperty(); // outputs: I'm a class property!

?>
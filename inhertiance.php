<?php

class MyOtherClass extends MyClass
{
    public function newMethod()
    {
        echo "From a new method in " . __CLASS__;
    }
}

$newobj = new MyOtherClass; // outputs

echo $newobj->newMethod(); // outputs: From a new method in MyOtherClass

echo $newobj->getProperty(); // outputs: I'm a class property!

?>
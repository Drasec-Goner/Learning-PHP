<?php

class MyOtherClass extends MyClass
{
    public function newMethod()
    {
        echo "From a new method in " . __CLASS__;
    }
}

$newobj = new MyOtherClass;

echo $newobj->newMethod();

echo $newobj->getProperty();

?>
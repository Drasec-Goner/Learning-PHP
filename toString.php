<?php
// Output the object as a string
echo $obj; // outputs: Catchable fatal error: Object of class MyClass could not be converted to string

class MyClass
{

    public function __toString()
    {
        echo "Using the toString method: ";
        return $this->getProperty();
    }
}

$obj = new MyClass;

// Output the object as a string
echo $obj; // outputs: Using the toString method: I'm a class property!

unset($obj); // destroy the object

?>
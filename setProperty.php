<?php

    class MyClass
    {
        public $prop1 = "I'm a class property!";

        public function setProperty($newval)
        {
            $this->prop1 = $newval;
        }

        public function getProperty()
        {
            return $this->prop1 . "<br>";
        }
    }

    $obj1 = new MyClass;
    $obj2 = new MyClass;

    

?>
<?php

abstract class AbstractClass
{
    // Our abstract method only needs to define the required arguments
    protected $tankVolume;

    public function setTankVolume($volume)
    {
        $this->tankVolume = $volume;
    }

    // Abstract method for children classes to implement
    abstract public function calcNumMilesOnFullTank();
}

class Honda extends AbstractClass {
    // Since we inherited abstract method, we need to define it in the child class, 
    // by adding code to the method's body.
    public function calcNumMilesOnFullTank()
    {
        $miles = $this->tankVolume * 30;
        return $miles;
    }

    public function getColor()
    {
        return 'beige';
    }
}


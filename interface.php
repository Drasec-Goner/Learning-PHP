<?php

abstract class Car {
    protected $tankVolume;

    public function setTankVolume($volume)
    {
        $this->tankVolume = $volume;
    }

    abstract public function calcNumMilesOnFullTank();
}

class Honda extends Car {
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
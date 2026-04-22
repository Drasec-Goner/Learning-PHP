<?php

class Animal {
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function makeSound()
    {
        return 'Some generic sound';
    }
}

class Dog extends Animal {
    public function makeSound()
    {
        return 'Bark';
    }
}

$dog = new Dog('Rover');

echo "Animal name: " . $dog->name . "<br>";
echo "Animal sound: " . $dog->makeSound() . "<br>";

?>
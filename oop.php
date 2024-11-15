<?php
class Car 
{
    public $brand;

    public function startEngine() 
    {
        echo "Engine started!";
    }
}

$car1 = new Car();
$car1->brand = "Toyota";

$car2 = new Car();
$car2->brand = "Honda";

$car1->startEngine();
echo $car2->brand;

class Animal
{
  
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function eat()
    {
        echo $this->name . " is eating. <br>";
    }

    public function sleep()
    {
        echo $this->name . " is sleeping. <br>";
    }
}

class Cat extends Animal
{
    public function meow()
    {
        echo $this->name . " says meow! <br>";
    }
}

class Dog extends Animal
{
    public function bark()
    {
        echo $this->name . " says woof! <br>";
    }
}

$cat = new Cat("Whiskers");
$dog = new Dog("Buddy");

$cat->eat();   
$dog->sleep(); 

$cat->meow();  
$dog->bark();  
?>





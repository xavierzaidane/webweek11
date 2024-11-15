<?php
class Animal
{
    public $name;
    protected $age;
    private $color;

    // Constructor to initialize the properties
    public function __construct($name, $age, $color)
    {
        $this->name = $name;
        $this->age = $age;
        $this->color = $color;
    }

    // Getter for the name property (public access)
    public function getName()
    {
        return $this->name;
    }

    // Getter for the age property (protected access)
    protected function getAge()
    {
        return $this->age;
    }

    // Getter for the color property (private access)
    private function getColor()
    {
        return $this->color;
    }
}

// Create a new Animal object
$animal = new Animal("Dog", 3, "Brown");

// Display the name of the animal
echo "Name:" . $animal->getName();

?>

<?php
class Car
{
    private $brand;

    // Constructor to initialize the brand
    public function __construct($brand)
    {
        echo "A new car is created. <br>";
        $this->brand = $brand;
    }

    // Getter for brand
    public function getBrand()
    {
        return $this->brand;
    }

    // Destructor to display a message when the object is destroyed
    public function __destruct()
    {
        echo "The car is destroyed. <br>";
    }
}

// Create a new Car object
$car = new Car("Toyota");

// Display the brand of the car
echo "Brand: " . $car->getBrand();
?>

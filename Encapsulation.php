<?php
class Car
{
    private $model;
    private $color;

    // Constructor to initialize model and color
    public function __construct($model, $color)
    {
        $this->model = $model;
        $this->color = $color;
    }

    // Getter for model
    public function getModel()
    {
        return $this->model;
    }

    // Setter for color
    public function setColor($color)
    {
        $this->color = $color;
    }

    // Getter for color
    public function getColor()
    {
        return $this->color;
    }
}

// Create an instance of the Car class
$car = new Car("Toyota", "Blue");

// Display car details
echo "Model: " . $car->getModel();
echo "Color: " . $car->getColor();

// Change car color
$car->setColor("Red");

// Display updated color
echo "Updated Color: " . $car->getColor();
?>


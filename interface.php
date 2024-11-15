<?php
// Define the Shape interface
interface Shape
{
    public function calculateArea();
}

// Define the Color interface
interface Color
{
    public function getColor();
}

// Circle class implements both Shape and Color interfaces
class Circle implements Shape, Color
{
    private $radius;
    private $color;

    // Constructor to initialize radius and color
    public function __construct($radius, $color)
    {
        $this->radius = $radius;
        $this->color = $color;
    }

    // Implement calculateArea method from Shape interface
    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }

    // Implement getColor method from Color interface
    public function getColor()
    {
        return $this->color;
    }
}

// Create an instance of Circle with radius and color
$circle = new Circle(5, "Blue");

// Display the area and color of the circle
echo "Area of Circle: " . $circle->calculateArea();
echo "Color of Circle: " . $circle->getColor();
?>

<?php
// Define the abstract class Shape
abstract class Shape
{
    // Abstract method to calculate area
    abstract public function calculateArea();
}

// Circle class extends Shape and implements calculateArea
class Circle extends Shape
{
    private $radius;

    // Constructor to initialize radius
    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    // Calculate area of the circle
    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }
}

// Rectangle class extends Shape and implements calculateArea
class Rectangle extends Shape
{
    private $width;
    private $height;

    // Constructor to initialize width and height
    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    // Calculate area of the rectangle
    public function calculateArea()
    {
        return $this->width * $this->height;
    }
}

// Create instances of Circle and Rectangle
$circle = new Circle(5);
$rectangle = new Rectangle(4, 6);

// Display areas of Circle and Rectangle
echo "Area of Circle: " . $circle->calculateArea();
echo "Area of Rectangle: " . $rectangle->calculateArea();
?>

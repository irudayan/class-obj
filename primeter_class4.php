<?php
class Rectangle
{
    // Declare  properties
    public $length = 6;
    public $width = 5;
    
    // Method to get the perimeter
    public function getPerimeter(){
        return (2 * ($this->length + $this->width));
    }
    
    // Method to get the area
    public function getArea(){
        return ($this->length * $this->width);
    }
}



// Include class defin
// Create a new object from Rectangle class
$obj = new Rectangle;
 

 
// Call the object methods
echo $obj->getPerimeter()."<br>";
echo $obj->getArea()."<br>";
echo "<?= and ?>.";
?>

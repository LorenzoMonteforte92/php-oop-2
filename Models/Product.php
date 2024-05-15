<?php
class Product{

    public $image;
    public $brand;
    public $description;
    public $price;
    public $available;

    public function __construct($_image, $_brand, $_description, $_price) {
        $this->image = $_image;
        $this->brand = $_brand;
        $this->description = $_description;
        $this->price = $_price;
    }
}



?>
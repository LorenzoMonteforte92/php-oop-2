<?php
class Product{

    public $image;
    public $name;
    public $brand;
    public $description;
    public $price;
    public $reviews;
    public $material;
    public $category;

    public function __construct($_image, $_name, $_brand, $_description, $_price, Category $_category) {
        $this->image = $_image;
        $this->name = $_name;
        $this->brand = $_brand;
        $this->description = $_description;
        $this->price = $_price;
        $this->category = $_category;

    }
}



?>
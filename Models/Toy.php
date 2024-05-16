<?php
require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/../Traits/Age.php';

class Toy extends Product{

    use Age;

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
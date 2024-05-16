<?php
require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/../Traits/Age.php';


class Food extends Product{

    public $weight;
    public $consistency;
    use Age;

    public function __construct($_image, $_name, $_brand, $_description, $_price, $_weight, $_consistency, Category $_category,) {
        parent::__construct($_image, $_name, $_brand, $_description, $_price, $_category);

        $this->weight = $_weight;
        $this->consistency = $_consistency;

    }



}

?>
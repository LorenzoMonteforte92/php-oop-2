<?php
require_once __DIR__ . '/Product.php';

class Food extends Product{

    public $weight;
    public $consistency;

    public function __construct($_image, $_name, $_brand, $_description, $_price, $_weight, $_consistency, Category $_category) {
        parent::__construct($_image, $_name, $_brand, $_description, $_price, $_category);

        $this->weight = $_weight;
        $this->consistency = $_consistency;

    }



}

?>
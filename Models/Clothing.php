<?php
require_once __DIR__ . '/Product.php';

class Kennel extends Product{

    public $size;

    public function __construct($_image, $_brand, $_description, $_price, $_size) {
        parent::__construct($_image, $_brand, $_description, $_price);

        $this->size = $_size;

    }



}

?>
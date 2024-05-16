<?php
require_once __DIR__ . '/Product.php';

class Kennel extends Product{

    public $size;

    public function __construct($_image, $_name, $_brand, $_description, $_price, $_size, Category $_category) {
        parent::__construct($_image, $_name, $_brand, $_description, $_price, $_category);

        $this->size = $_size;

    }



}

?>
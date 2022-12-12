<?php

class Toy extends Product
{
    public $product_type;
    public $size;

    public function __construct($_id, $_name, $_brand, Category $_category, $_price, $_image, $_product_type, $_size)
    {
        parent::__construct($_id, $_name, $_brand, $_category, $_price, $_image);

        $this->product_type = $_product_type;
        $this->size = $_size;
    }
}

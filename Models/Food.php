<?php

class Food extends Product
{
    public $product_type;
    public $weight;
    public $taste;

    public function __construct($_id, $_name, $_brand, Category $_category, $_price, $_image, $_product_type, $_weight, $_taste)
    {
        parent::__construct($_id, $_name, $_brand, $_category, $_price, $_image);

        $this->product_type = $_product_type;
        $this->weight = $_weight;
        $this->taste = $_taste;
    }
}

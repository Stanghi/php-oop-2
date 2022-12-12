<?php

class Product
{
    public $id;
    public $name;
    public $brand;
    public $category;
    public $price;
    public $image;
    public $is_available = true;

    public function __construct($_id, $_name, $_brand, Category $_category, $_price, $_image)
    {
        $this->id = $_id;
        $this->name = $_name;
        $this->brand = $_brand;
        $this->category = $_category;
        $this->price = $_price;
        $this->image = $_image;
    }
}

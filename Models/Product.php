<?php

class Product
{
    public $id;
    public $name;
    public $brand;
    public $category;
    public $price;
    public $is_available = true;
    public $image;

    public function __construct($_id, $_name, $_brand, Category $_category, $_price, $_image = null)
    {
        $this->id = $_id;
        $this->name = $_name;
        $this->brand = $_brand;
        $this->category = $_category;
        $this->price = $_price;
        $this->image = $_image;
    }
}

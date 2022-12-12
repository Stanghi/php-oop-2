<?php

class Food
{
    public $weight;
    public $taste;

    public function __construct($_weight, $_taste)
    {
        $this->weight = $_weight;
        $this->taste = $_taste;
    }
}

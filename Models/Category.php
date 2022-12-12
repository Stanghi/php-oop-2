<?php

class Category
{
    public $name;
    public $icon;

    public function __construct($_name)
    {
        $this->name = $_name;
        $this->setIcon();
    }

    public function setIcon()
    {
        if ($this->name === 'Dog') $this->icon = '<i class="fa-solid fa-dog"></i>';
        if ($this->name === 'Cat') $this->icon = '<i class="fa-solid fa-cat"></i>';
    }
}

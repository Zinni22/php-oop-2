<?php

require_once __DIR__.'/category.php';

class Product{

    public $name;
    public $price;
    public $image;
    public $amount;
    public $category;

    function __construct(
        string $name,
        string $price,
        string $image,
        int $amount,
        Category $category)
    {
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
        $this->amount = $amount;
        $this->category = $category;
    }

}

?>
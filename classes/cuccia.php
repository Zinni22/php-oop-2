<?php

require_once __DIR__.'/product.php';

class Cuccia extends Product{

    public $size;

    function __construct(
        string $name,
        string $price,
        string $image,
        int $amount,
        Category $category,
        string $size,
    )
    {
        parent::__construct(
            $name,
            $price,
            $image,
            $amount,
            $category
        );

        $this->size = $size;
    }
}

?>